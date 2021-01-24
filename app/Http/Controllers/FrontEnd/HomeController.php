<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
   
    public function index()
    {

        $banner = "Technological Devices";

        // get Data For Sale section
            
        $productsOnSale = forSale()->with('color')->get();    
    
        $newArrivals = forNewArrivals()->with('color')->get();

        $laptopsForBanner = getAll(2);
        return view('welcome',compact(
            'productsOnSale','banner','newArrivals','laptopsForBanner'
        ));
    }


    
    public function contact(){
        $banner = "Contact us";
        return view('frontend.pages.contact.contact-us',compact('banner'));
    }
}
