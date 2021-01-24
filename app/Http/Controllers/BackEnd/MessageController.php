<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Mail\MessageReplay;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends BackEndController
{
    protected $model;

    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    
    public function replay($message){
        $message = $this->model::findOrFail($message);
        return view('backend.messages.replay',compact('message'));
    }
    public function send(Request $request){
      
        $request->validate([
            'response' => ['required','min:3','max:100']
        ]);
      $message = Message::findOrFail($request->message_id);
      $response = $request->response;
      Mail::to($message->email)->send(new MessageReplay($message,$response));
      return redirect()->route('messages.index')->with('message','Replay sent!');
    }

}
