<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('moveToWishlist')->remove($id);

        return back()->with('success_message', 'Item has been removed!');
    }

    /**
     * Switch item from Saved for Later  to Cart.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function moveToWishlist($id)
    {
        $item = Cart::instance('moveToWishlist')->get($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('wishlist')->with('success_message', 'Item is already in your Wishlist!');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Models\Product');

        return redirect()->route('wishlist')->with('success_message', 'Item has been moved to Wishlist!');
    }
}
