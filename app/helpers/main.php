<?php

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
function checkIfNew(string $value){
    $now = Carbon::now();
    $m2 = $now->month;
    $y2 = $now->format('y');
    $value = strtotime($value);
    $m1 = intval(date('m',$value));
    $y1 = intval(date('y',$value));
    $diff = (($y2 - $y1) * 12) + ($m2 - $m1);
    return $diff < 6;
    
}

function itemsInCart(){
    $purchases = [];
    if(auth()->user()){
        
        $purchases = Cart::where('user_id', auth()->user()->id)->with(['product','color'])->get();
    }
    return $purchases;
}

function fillter(string $key, $id){
    $products = Product::where($key,'=',$id)->with(['category','brand'])->paginate(2);
    return $products;
}

function getAll($category){
    $products = Product::where('cat_id',$category)->get();
    return $products;
}

function clcDiscount(float $price, $dis){
    $price =  $price*($dis/100.00);
    return number_format($price, 2) - 0.01;
}

function forSale(){
    $query = Product::where('discount','>',1)->orderBy('cat_id','ASC')->orderBy('discount','DESC')->orderBy('id','DESC');
    return $query;
}

function forNewArrivals(){
    $query = Product::orderBy('id','desc')->orderBy('cat_id','ASC')->orderBy('discount','DESC');
    return $query;
}