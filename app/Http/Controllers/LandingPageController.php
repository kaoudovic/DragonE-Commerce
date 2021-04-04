<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::all();
        $popular_categories = $this->getPopularCategories();
        $products =Product::where('Featured',true)->take(8)->get();
        $deals = $this->getProductsWithDeals();
        $new_products = $this->getNewProducts();
        $best_selling = $this->getBestSellingProducts();
        $recently_viewed = $this->getRecentlyViewedProducts();
        $random_section =  $this->getRandomProducts();
        $month_products = $this->getMonthProducts();
        $recommended_products = $this->getRecommendedProducts();

        return view('frontend.Landing-Page.index',compact(
            'products',
            'categories',
            'popular_categories',
            'deals',
            'new_products',
            'best_selling',
            'recently_viewed',
            'random_section',
            'month_products',
            'recommended_products'
        ));
    }

    private function getPopularCategories()
    {
        $product_ids = DB::table('order_product')
            ->select('product_id')
            ->get();

        $ids_for_products = [];
        foreach ($product_ids as $product_id)
        {
            $ids_for_products [] =$product_id->product_id;
        }

        $category_ids = DB::table('category_product')
            ->select('category_id', DB::raw('count(*) as total'))
            ->whereIn('product_id',$ids_for_products)
            ->groupBy('category_id')
            ->orderBy('total','DESC')
            ->get()->toArray();


        $ids_for_categories = [];
        foreach ($category_ids as $category_id)
        {
            $ids_for_categories [] =$category_id->category_id;
        }
        $categories = Category::whereIn('id',$ids_for_categories)
            ->limit(4)->get();
        $remain = 0;
        if(count($categories) < 4)
        {
            $remain = 4 - count($categories);
            $remain = Category::whereNotIn('id',$ids_for_categories)->take($remain)->get();

        }

        $final_result = [];

        foreach ($categories as $category)
        {
            $final_result [] = $category->getAttributes();
        }
        if($remain)
        {
            foreach ($remain as $category)
            {
                $final_result [] = $category->getAttributes();
            }
        }

        return $final_result;

    }

    private function getProductsWithDeals()
    {
        return array_chunk(Product::where('discount','>',0)
            ->with('category')
            ->orderBy('discount','DESC')
            ->orderBy('created_at','DESC')
            ->limit(40)
            ->get()->toArray(),4);
    }

    private function getNewProducts()
    {
        return array_chunk(Product::with('category')
            ->orderBy('created_at','DESC')
            ->orderBy('discount','DESC')
            ->limit(40)
            ->get()->toArray(),4);
    }

    private function getBestSellingProducts()
    {
        $product_ids = DB::table('order_product')
            ->select('product_id')
            ->get();
        $ids_for_products = [];
        foreach ($product_ids as $product_id)
        {
            $ids_for_products [] =$product_id->product_id;
        }

        return array_chunk(Product::with('category')
            ->whereIn('id',$ids_for_products)
            ->limit(40)
            ->get()->toArray(),4);

    }

    private function getRecentlyViewedProducts()
    {
        $product_ids = DB::table('recently_viewed_products')
            ->select('product_id')
            ->orderBy('recent_date','DESC')
            ->orderBy('count','DESC')
            ->limit(40)
            ->get();
        $ids_for_products = [];
        foreach ($product_ids as $product_id)
        {
            $ids_for_products [] =$product_id->product_id;
        }
        return array_chunk(Product::with('category')
            ->whereIn('id',$ids_for_products)
            ->get()->toArray(),4);
    }

    private function getRandomProducts()
    {
        return Product::with('category')->get()->random(8);

    }

    private function getMonthProducts()
    {
        return Product::with('category')
            ->whereMonth('created_at',date('m'))
            ->whereYear('created_at',date('y'))
            ->get();

    }

    private function getRecommendedProducts()
    {
        return Product::with('category')
            ->orderBy('discount','DESC')
            ->orderBy('created_at','DESC')
           ->limit(12)
            ->get();
    }
}
