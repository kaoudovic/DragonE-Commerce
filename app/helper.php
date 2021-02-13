<?php

use Gloudemans\Shoppingcart\Facades\Cart;

function presentPrice($price)
{
    setlocale(LC_MONETARY,"en_US");
    return money_format("%i", $price/100);
}

function test_x($x){
    return number_format($x,2);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}


