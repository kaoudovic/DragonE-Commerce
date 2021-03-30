<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        if( session('success'))
        {
            toast(session('success'),'success');
        }
//        Alert::info('Info Title', 'Info Message');

        $categories = Category::all();
        $pagination = 9;

        if (request()->category) {
            $products = Product::with(['categories','options.property'])->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::with(['options.property'])->where('featured',false);
            $categoryName = 'Featured';

        }

        // get applied options
        $appliedFilters = $this->applyFilters(request(),$products);



        // get options
        $options = $this->handleOptionsForFilters($products->get());

        // fetch required data



        if(request()->ajax())
        {
            $this->handleProductSorting(request(),$products);
            $products = $products->orderBy('name','desc')->paginate($pagination);
            return view('frontend.pages.shop.products', compact('products'));
        }
        $products = $products->orderBy('name','ASC')->paginate($pagination);

        return view('frontend.pages.shop.shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName,
            'options' => $options,
            'appliedFilters' => $appliedFilters
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($slug)
    {
        $product = Product::with(['options.property'])->where('slug',$slug)->firstOrFail();
        $our_latest_collection=Product::where('slug','!=',$slug)->inRandomOrder()->take(4)->get();
        $options = $this->handleOptionsForFilters([$product]);

        return view('frontend.products.show')->with([
            'product' => $product,
            'our_latest_collection' => $our_latest_collection,
            'options' => $options
       ] );
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

         $products = Product::where('name', 'like', "%$query%")
                            ->orWhere('details', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->orWhere('price', 'like', "%$query%")
                            ->paginate(8);
        return view('frontend.pages.search_results')->with('products', $products);
    }

    public function searchAlgolia(Request $request)
    {
        return view('frontend.pages.search_results_algolia');
    }

    private function handleOptionsForFilters($products)
    {
        $options = [];
        foreach ($products as $product)
        {
            if(!empty($product->options))
            {
                foreach ($product->options as &$option)
                {
                    if(!key_exists($option->property->name,$options))
                        $options [$option->property->name] = [$option->name];
                    else
                        array_push($options [$option->property->name],$option->name);

                    $options[$option->property->name] = array_unique($options[$option->property->name]);
                }
            }
        }

        return $options;
    }


    private function applyFilters($request, &$products)
    {
        $filters = $request->request->all();
        $allFilters = [];

        $min_price = 0;
        $max_price = 0;


        if(isset($filters['filter']) && !empty($filters['filter']))
        {
            // handle price filter
            $min_price = intval($filters['filter']['price']['min_price']);
            $max_price = intval($filters['filter']['price']['max_price']);

            foreach ($filters['filter'] as $key => $filter)
            {
                if($key != 'price')
                {
                    foreach ($filter as $key2 => $item)
                        array_push($allFilters,$key2);
                }
            }
            if(count($allFilters))
            {
                $products->whereHas('options',function ($query) use ($allFilters){
                    $query->whereIn('name',$allFilters);
                });
            }

           // price filter
            if($min_price)
                $products->where('price','>=', $min_price);
            if($max_price)
                $products->where('price','<=', $max_price);

        }
        return ['filters' => $allFilters, 'min_price'=> $min_price , 'max_price' => $max_price];
    }

    private function handleProductSorting($request,&$products)
    {
        $key = strtolower(explode('_', $request->sort)[0]);
        $value = strtolower(explode('_', $request->sort)[1]);

        if($value == 'ascending')
            $value = substr($value,0,3);
        else
            $value = substr($value,0,4  );

        $products = $products->orderBy($key,$value);
    }

}
