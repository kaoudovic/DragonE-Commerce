<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function show($id){

        $product = Product::with('category')->where('id', $id)->with(['images','color'])->first();
        $banner = "4Tech ".$product->category->name;
        return view('frontend.products.show',compact('product', 'banner'));
    }
}
