<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Input;

class ShopController extends Controller
{
    public function index(){
        $banner = "4Tech main Shop";

        if(request()->has('search'))
        {
            $products = Product::where('name','LIKE','%'.request()->search.'%')->paginate(20);
        } else{

            $products = Product::paginate(20);
        }

        $products->appends(Request('page'))->links();
        $products->fragment('cat');
        return view('frontend.pages.shop.index1',compact('banner','products'));
    }

    function shopFillter($id){

        $key = request()->key;
        if($key!=''){
            $products = fillter($key, $id);
        }
        $products->appends(request('page'))->links();
        $products->fragment('cat');
        $banner = "4Tech main Shop";
        return view('frontend.pages.shop.index',compact('banner','products'));
    }
}
