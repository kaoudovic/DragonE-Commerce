@extends('backend.layouts.master')

@section('page_title')
    Products
@endsection
@section('nav_title')
    Add Product
@endsection

@section('content')
    
    <div id="container" style="width:70%;margin:0 left">
        <form action="{{route(.$routeName'.store')}}" method = "POST" enctype='multipart/form-data'>
           @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" value="{{old('name')}}" placeholder="Enter product name" name="name">
        </div>
        <div class="form-group">
            <label>Descriptions:</label>
            <input type="text" class="form-control" value="{{old('description')}}" placeholder="Enter Product Description" name="description">
        </div>
        <div class="form-group">
            <label>Brand</label>
            <select class="custom-select" name="brand_id">
                @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="custom-select" name="cat_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Colors</label>
            <select multiple class="custom-select" name="colors[]">
                @foreach($allColors as $color)
                    <option value="{{$color->id}}">{{$color->color}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" value="{{old('price')}}" placeholder="Enter Product price" name="price">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" class="form-control" value="{{old('qauntity')}}" placeholder="Enter Product quantity" name="quantity">
        </div>
        <div class="form-group">
            <label>Discount</label>
            <input type="number" class="form-control" value="{{old('discount')}}" placeholder="Enter Product discount" name="discount">
        </div>
        <div class="form-group">
            <label>Product image</label>
            <input type="file" class="form-control-file" name = "image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection