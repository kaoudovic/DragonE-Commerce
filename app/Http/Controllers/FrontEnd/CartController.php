<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\helpers\main;
use App\Http\Requests\FrontEnd\Cart\Store;

class CartController extends Controller
{
    public function index($id){
        $purchases = itemsInCart();
        $banner = count($purchases) > 0 ? "Shopping Cart" : "Empty Cart";
//        return view ('frontend.pages.cart.index',compact('purchases','banner'));
        return view ('frontend.pages.cart.cart',compact('purchases','banner'));
    }

    public function create(Request $request){
        if(!$request->has('product_color')){
            $request->merge((['product_color' => 1]));


        }

        $cart = Cart::where('product_id', $request->product_id)->where('color_id',$request->product_color)->where('user_id',auth()->user()->id)->get();

        if(count($cart)){
            if($request->has('quantity')){
                $cart->first()->quantity =  $cart->first()->quantity + $request->quantity;
            } else{

                $cart->first()->quantity =  $cart->first()->quantity + 1;
            }
            $cart->first()->save();
        }
        else{
            $cartArray = [
               'user_id' => auth()->user()->id,
               'product_id' => $request->product_id,
               'quantity' => 1,
               'color_id' => $request->product_color
               ];
               $cart = Cart::create($cartArray);
        }
        return redirect()->back()->with('success','Product Added to your cart');

    }

    public function update(Request $request, $id){

        $cartItem = Cart::where('user_id',auth()->user()->id)->where('product_id',$id)->
        where('color_id',$request->color)->first();
        $cartItem->quantity = $request->quantity;
        $cartItem->save();
        return redirect(url('/main/cart/'.auth()->user()->id).'#cart');
    }

    public function destroy($id){

        $item = Cart::findOrFail($id);
        $item->delete();
        return redirect(url('/main/cart/'.auth()->user()->id).'#cart');
    }

}
