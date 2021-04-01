<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackRequest;
use App\Models\OrderTraking;
use Illuminate\Http\Request;

class OrderTrakingController extends Controller
{
    public function index()
    {
        return view('frontend.pages.trackorder');
    }

    public function trackingOrderStore(TrackRequest $request)
    {
        // Insert into orderTraking table
        OrderTraking::create($request->all());
        alert()->success('You message have been saved , we will call you n 24 hour' , 'Done');
        return redirect()->route('home');// wellcome page
    }
}
