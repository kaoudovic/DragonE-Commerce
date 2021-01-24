{{--@extends('layouts.master')--}}

{{--@push('head')--}}
{{--    <!-- old head--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">--}}
{{--<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/slick-1.8.0/slick.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_styles.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/main_styles.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/responsive.css')}}">--}}

{{---->--}}


{{--    <!-- Roboto Font -->--}}
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">--}}
{{--    <!-- Font Awesome -->--}}
{{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">--}}


{{--    <!-- Scripts-->--}}
{{--    <!-- Styles -->--}}
{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">--}}
{{--    <!-- Material Design Bootstrap -->--}}
{{--    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">--}}
{{--    <!-- Material Design Bootstrap Ecommerce -->--}}
{{--    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">--}}

{{--@endpush--}}

{{--@push('footer')--}}

{{--    <!-- old scripts--}}
{{--<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>--}}
{{--<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/slick-1.8.0/slick.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/custom.js')}}"></script>--}}

{{---->--}}


{{--    <!-- SCRIPTS -->--}}
{{--    <!-- JQuery -->--}}
{{--    <script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>--}}
{{--    <!-- Bootstrap tooltips -->--}}
{{--    <script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>--}}
{{--    <!-- Bootstrap core JavaScript -->--}}
{{--    <script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>--}}
{{--    <!-- MDB core JavaScript -->--}}
{{--    <script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>--}}
{{--    <!-- MDB Ecommerce JavaScript -->--}}
{{--    <script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>--}}
{{--    <script>--}}

{{--    </script>--}}


{{--@endpush--}}

{{--@section('banner', $banner)--}}

{{--@section('content')--}}

{{--<div class="single_product">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}


{{--            <div class="col-lg-2 order-lg-1 order-2">--}}
{{--                <ul class="image_list">--}}
{{--                    @foreach($product->images as $image)--}}
{{--                        <li data-image=""><img src="{{asset('assets/images/'.$image->product_image)}}" alt=""></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}

{{--            <!-- Selected Image -->--}}
{{--            <div class="col-md-4 order-md-2 order-1">--}}
{{--                <div class="image_selected"><img src="{{asset('assets/images/'.$product->image)}}" width="300" height="400" alt=""></div>--}}
{{--            </div>--}}

{{--            <!-- Description -->--}}
{{--            <div class="col-lg-6 order-3">--}}
{{--                <div class="product_description">--}}
{{--                    <div class="product_category">{{$product->category->name}}</div>--}}
{{--                    <div class="product_name">{{$product->name}}</div>--}}
{{--                    <div class="product_text"><p>{{$product->description}}</p></div>--}}
{{--                    <div class="order_info d-flex flex-row">--}}
{{--                        <form action="{{route('cart.create')}}" method="POST">--}}
{{--                            {{ csrf_field() }}--}}
{{--                            <div class="clearfix" style="z-index: 1000;">--}}

{{--                                <!-- Product Quantity -->--}}
{{--                                <div class="product_quantity clearfix">--}}
{{--                                    <span>Quantity: </span>--}}
{{--                                    <input name="quantity" id="quantity_input" type="text" pattern="[1-9]*" value="1">--}}
{{--                                    <div class="quantity_buttons">--}}
{{--                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>--}}
{{--                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <!-- Product Color -->--}}
{{--                                <ul class="product_color">--}}
{{--                                    <li>--}}
{{--                                        <span>Color: </span>--}}
{{--                                        <div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>--}}
{{--                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>--}}

{{--                                        <ul class="color_list">--}}
{{--                                            @foreach($product->color as $color)--}}

{{--                                            <li> <input readonly name="product_color" type="password" value="{{$color->id}}" class="color_mark" style="background: {{$color->color}};"></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}

{{--                            @if($product->discount == 0)--}}
{{--                                <div class="product_price">${{$product->price}}</div>--}}
{{--                            @else--}}
{{--                                <div class="product_price"><del>${{$product->price}}</del> <br>${{clcDiscount($product->price,$product->discount)}}</div>--}}
{{--                            @endif--}}
{{--                            <div class="button_container">--}}
{{--                                <input type="hidden" name="product_id" value="{{$product->id}}">--}}
{{--                                @if(auth()->user())--}}
{{--                                    <button type="submit" class="button cart_button">Add to Cart</button>--}}
{{--                                @else--}}
{{--                                    <a href="{{route('register')}}" class="button cart_button">Register Now</a>--}}
{{--                                @endif--}}

{{--                            </div>--}}

{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@endsection--}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Algmdan.com</title>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">

</head>

<body class="skin-light">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
    <!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h1 class="mb-0">Product page</h1>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Block Content-->
        <section class="mb-5">

            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox">

                        <div class="row product-gallery mx-1">

                            <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                                    <a  src="{{asset ('Pictures_Project/phone/product/1.webp')}}" data-size="710x823">
                                        <img  src="{{asset('Pictures_Project/phone/product/1.webp')}}"
                                              class="img-fluid z-depth-1" style="margin-top: -30px;">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a  src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg.webp')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a hsrc="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/5.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/4.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/3.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/2.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">

                    <h5>
                        New Apple iPhone 12 Pro Max (256GB, Pacific Blue) [Locked] + Carrier Subscription
                        by Apple</h5>
                    <p class="mb-2 text-muted text-uppercase small">IPhone</p>
                    <ul class="rating">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <p><span class="mr-1"><strong>$100.00 </strong></span></p>
                    <p class="pt-1">This phone must be purchased with a monthly carrier plan and will be locked to the selected carrier.
                        Get up to $100.00 over 24 months added to your Amazon.com Gift Card balance ($4.17/month every month you’re subscribed). Limit 1 iPhone and wireless plan per account. Learn more.</p>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Size: </strong></th>
                                <td>256GB</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                <td>Pacific Blue</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                <td>USA, Europe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 pb-0 w-25">Quantity</td>
                                <td class="pb-0">Select size</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <div class="def-number-input number-input safari_only mb-0">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus"></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="small">128GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="medium">256GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="large">512GB</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Add to
                        cart</button>
                </div>
            </div>

        </section>
        <!--Section: Block Content-->
        <hr>

        <!--Section: Block Content-->
        <section>

            <h3 class="text-center pt-5 mb-0">Our latest collection</h3>

            <!-- Grid row -->
            <div class="row mt-5 mb-4">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-3 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom z-depth-2 rounded">
                            <img class="img-fluid w-100" style="max-height:280px " src="{{asset
                            ('Pictures_Project/phone/Apple/12.jpg')
                            }}"alt="Sample">
                            <a href="#!">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>Seagrass basket - M</h5>
                            <h6 class="mb-3">$ 23.00</h6>
                            <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-3 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom z-depth-2 rounded">
                            <img class="img-fluid w-100" style="max-height:280px" src="{{asset
                            ('Pictures_Project/phone/Apple/i11.jpg')}}"
                                 alt="Sample">
                            <a href="#!">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>Seagrass basket - L</h5>
                            <h6 class="mb-3">$ 25.00</h6>
                            <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-3 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom z-depth-2 rounded">
                            <img class="img-fluid w-100" style="max-height:280px " src="{{asset
                            ('Pictures_Project/phone/Apple/4.jpg')}}"
                                 alt="Sample">
                            <a href="#!">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>Flat seagrass basket</h5>
                            <h6 class="mb-3">$ 20.00</h6>
                            <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-3 mb-4">

                    <!-- Card -->
                    <div class="">

                        <div class="view zoom z-depth-2 rounded">
                            <img class="img-fluid w-100" style="max-height:280px " src="{{asset
                            ('Pictures_Project/phone/Apple/3.jpg')}}"
                                 alt="Sample">
                            <a href="#!">
                                <div class="mask waves-effect waves-light"></div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>Small wicker basket</h5>
                            <h6 class="mb-3">$ 9.00</h6>
                            <button type="button" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                            <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="far fa-heart"></i></button>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </section>        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->



<!-- Footer -->
@include('layouts.footer')

<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>
<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>
</body>

</html>
