<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\MessagesRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;


class MessagesController extends Controller
{

    public function index()
    {
        return view('frontend.pages.contact.contact-us');
    }

    public function messageStore(MessagesRequest $request){
        Message::create($request->all());
//        alert()->success('You message have been saved , we will call you n 24 hour' , 'Done');
        SweetAlert::success('Success Message', 'Optional Title');

        return redirect()->route('home');// wellcome page

    }
}
