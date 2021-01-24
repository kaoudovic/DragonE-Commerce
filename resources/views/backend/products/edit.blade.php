@extends('backend.layouts.master')

@section('page_title')
    Products
@endsection
@section('nav_title')
    Edit Product
@endsection

@section('content')

    <div id="container" style="width:70%;margin:0 left">
        <form action="{{route(.$routeName'.update',['product' => $row->id])}}" method = "POST" enctype='multipart/form-data'>
           @csrf
           @method('put')
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" value="{{$row->name}}" name="name">
        </div>
        <div class="form-group">
            <label>Descriptions:</label>
            <input type="text" class="form-control" value="{{$row->description}}" name="description">
        </div>
        <div class="form-group">
            <label>Brand</label>
            <select class="custom-select" name="brand_id">
                @foreach($brands as $brand)
                    <option {{$brand->name == $row->brand->name ? 'selected' : ''}} value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="custom-select" name="cat_id">
                @foreach($categories as $category)
                    <option {{$category->name == $row->category->name ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Colors</label>
            <select multiple class="custom-select" name="colors[]">
                @foreach($allColors as $color)
                    <option {{in_array($color->id,$row->color->pluck('id')->toArray()) ? 'selected' : ''}} value="{{$color->id}}">{{$color->color}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" value="{{$row->price}}" name="price">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" value="{{$row->quantity}}" name="quantity">
        </div>
        <div class="form-group">
            <label>Discount</label>
            <input type="text" class="form-control" value="{{$row->discount}}" name="discount">
        </div>
        <div class="form-group">
            <label>Poroduct image</label>
            <input type="file" class="form-control-file" name = "image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection