@extends('backend.layouts.master')

@section('page_title')
    {{$page_title}}
@endsection
@section('nav_title')
    {{$nav_title}}
@endsection

@section('content')
    
    <div id="container" style="width:70%;margin:0 left  ">
        <form action="{{route($routeName.'.store')}}" method = "POST">
        @csrf
       
        <div class="form-group">
            <label>Category Name:</label>
            <input type="text" class="form-control" placeholder="Category name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection