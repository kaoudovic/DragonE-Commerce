
@extends('layouts.master')

@push('head')

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/cart_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/shop_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/cart_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">

@endpush

@push('footer')

<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/js/cart_custom.js')}}"></script>

@endpush

@section('banner', $banner)

@section('content')

@if(count($purchases))
<div style="margin-top: -100px; margin-bottom: -100px;" class="cart_section" id="cart">
    <div style="margin-b" class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <table class="table" style="font-size:18px;margin-top:50px">
                        <thead style="background-color: rgb(42, 148, 255); color: white;">
                          <tr>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Color</th>
                            <th scope="col" class="text-center">Quntity</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Total</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $sub_total = 0;
                                $total = 0;
                                $cnt = 0;
                            @endphp
                            @foreach($purchases as $purchase)

                            @php $sub_total = 0; @endphp
                            <tr>
                                <td class="text-center">{{$purchase->product->name}}</td>
                                <td class="text-center">
                                    <div style="margin-top: -5px;"  class="cart_item_text">
                                    <span class="text-center" style="background-color:{{$purchase->color->color}};"></span>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{route('cart-item.update',['id' => $purchase->product->id])}}" id="update-cart{{$cnt}}"  method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="method" value="PUT">
                                        <input type="hidden" name="color" value="{{$purchase->color_id}}">
                                        <div class="quantity"  style="margin-left: 100px">
                                            <input name="quantity" style="margin-right: 20px" type="number" min="1" max="9" step="1" value="{{$purchase->quantity}}">
                                        </div>
                                    </form>
                                </td>
                                <td class="text-center">
                                    ${{clcDiscount($purchase->product->price,$purchase->product->discount)}}
                                    @php
                                        $sub_total+=(clcDiscount($purchase->product->price,$purchase->product->discount) * $purchase->quantity);
                                    @endphp
                                </td>
                                <td class="text-center">
                                    ${{$sub_total}}
                                    @php $total+=$sub_total @endphp
                                </td>
                                <td class="text-center">
                                    <button style="border: none" form="update-cart{{$cnt++}}" type="submit"><img src="{{asset('assets/images/update.png')}}" width="25" height="25" alt=""></button>
                                <a href="{{route('cart-item.delete',['id' => $purchase->id])}}"><img src="{{asset('assets/images/delete.png')}}" width="25" height="25" alt=""></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
</div>
</div>
@endif

@endsection
