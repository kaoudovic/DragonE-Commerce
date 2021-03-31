<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

    public function index()
    {
        $wishlists = Wishlist::where('user_id',Auth::id())->with('product')->get();
        $products = [];
        foreach ($wishlists as $list)
        {
            $product = $list->product;
            $products [] = $product;
        }
        return view('frontend.pages.wishlist.wishlist',compact('products'));
    }

    public function deleteFromWishlist($id)
    {
        $wishlist = Wishlist::where('user_id',Auth::id())->where('product_id',$id)->first();
        if($wishlist)
            $wishlist->delete();
    }

    public function moveToWishlist($product_id)
    {

        $wishlist_exits = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();
        if(empty($wishlist_exits))
        {
            $wishlist = new Wishlist();
            $wishlist->user_id = Auth::id();
            $wishlist->product_id  = $product_id;
            $wishlist->save();
            return \response()->json(['class' => 'fa fa-heart']);
        }
        else {

            $wishlist_exits->delete();
            return \response()->json(['class' => 'far fa-heart']);
        }
    }
}
