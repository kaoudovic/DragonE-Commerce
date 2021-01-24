@extends('backend.layouts.master')

@section('page_title')
    {{$page_title}}
@endsection
@section('nav_title')
    {{$nav_title}}
@endsection

@section('content')
    
    <div id="container" style="width:70%;margin:0 left  ">
        <form action="{{route($routeName.'.update',[$parameter => $row])}}" method = "POST">
        @csrf
        <input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label>Brand Name:</label>
            <input type="text" class="form-control" value="{{$row->name}}" name="name">
        </div>
        <div class="form-group">
            <label>Website:</label>
            <input type="text" class="form-control" value="{{$row->website}}" name="website">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection