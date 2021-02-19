<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/', 'LandingPageController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');
Route::post('/cart/moveToWishlist/{product}', 'CartController@moveToWishlist')->name('cart.moveToWishlist');

Route::delete('/wishlist/{product}', 'WishlistController@destroy')->name('wishlist.destroy');


Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');


Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');




Route::get('/wishlist',function(){
    return view('frontend.pages.wishlist.wishlist');})->name('wishlist');

Route::get('/aboutus',function(){
    return view('frontend.pages.aboutus');})->name('about_us');


Route::get('/test',function(){
    return view('frontend.pages.test');})->name('test');

Route::get('/trackorder',function(){
    return view('frontend.pages.trackorder');})->name('track_order');


Route::get('/checkout',function(){
    return view('frontend.pages.checkout');})->name('checkout');


Route::get('/contact',function(){
    return view('frontend.pages.contact.contact-us');})->name('contact');


Route::get('/blog',function(){
    return view('frontend.pages.blog.index1');})->name('blog.index');

