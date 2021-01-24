@extends('backend.layouts.master')

@section('page_title')
    
@endsection
@section('nav_title')
    
@endsection

@section('content')
    
    <div id="container" style="width:70%;margin:0 left">
        <form action="{{route('messages.send')}}" method = "POST">
           @csrf
           <div class="form-row">
            <div class="form-group col-md-4">
              <label><strong>Username</strong></label>
              <input readonly class="form-control" value="{{$message->username}}">
            </div>
            <div class="form-group col-md-4">
                <label><strong>Email</strong></label>
                <input readonly class="form-control" value="{{$message->email}}">
            </div>
            <div class="form-group col-md-4">
                <label><strong>Mobile</strong></label>
              <input readonly class="form-control" value="{{$message->mobile}}">
            </div>
          </div>
          <div class="form-group">
            <label><strong>Message</strong></label>
            <textarea readonly class="form-control" cols="20" rows="5">{{$message->message}}</textarea>
          </div>
          <div class="form-group">
            <label><strong>Reponse</strong></label>
            <textarea name="response" class="form-control" cols="20" rows="5"></textarea>
          </div>
        <input type="hidden" name="message_id" value="{{$message->id}}">
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
    </div>

@endsection