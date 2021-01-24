@extends('backend.layouts.master')

@section('page_title')
    {{$page_title}}
@endsection
@section('nav_title')
    {{$nav_title}}
@endsection

@section('content')


<h3 class="text-left font-weight-bold  py-4">
    <a class="btn btn-primary" href="{{route('products.create')}}"> Add {{ucfirst($parameter)}} </a>
</h3>
<form method="GET">

    <div class="form-group">
        <select class="custom-select" name="category" style="width: 20%">
            <option value=''>All</option>
            @foreach($categories as $category)
                <option {{(request()->get('category')==$category->id ?'selected' : '')}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <select class="custom-select" name="brand" style="width: 20%">
            <option value=''>All</option>
            @foreach($brands as $brand)
                <option {{(request()->get('brand')==$brand->id ?'selected' : '')}} value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Filter</button>
    </div>
</form>

@if(count($rows))
    <div class="card">
        <div id="table">
            <table class="table table-bordered table-responsive-md table-striped text-center">
            <thead>
                <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Brand</th>
                <th class="text-center">Category</th>
                <th class="text-center">Colors</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">remain</th>
                <th class="text-center">Price</th>
                <th class="text-center">Discount</th>
                <th class="text-center" style="width: 18%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td class="pt-3-half">{{$row->id}}</td>
                        <td class="pt-3-half">{{$row->name}}</td>
                        <td class="pt-3-half">{{$row->brand->name}}</td>
                        <td class="pt-3-half">{{$row->category->name}}</td>
                        <td class="pt-3-half">
                            @foreach($row->color as $color)

                                <div  style="width: 20px;height:20px; background-color:{{$color->color}}; display:inline-block;border-radius:15px"></div>
                            @endforeach

                        </td>
                        <td class="pt-3-half">{{$row->quantity}}</td>
                        <td style="color: {{$row->quantity<=1?'red':'black'}}" class="pt-3-half">{{$row->remain}}</td>
                        <td class="pt-3-half"> <strong>$</strong> {{$row->price}}</td>
                        <td class="pt-3-half">{{$row->discount}}%</td>
                        <td class="pt-3-half">

                             @include('backend.shared.buttons.edit')
                             @include('backend.shared.buttons.delete')
                        </td>

                    </tr>
                @endforeach

            </tbody>
            </table>
            <div class="d-flex justify-content-center"></div>
        </div>
        </div>
    </div>
@endif
@endsection
