{{--@extends('layouts.master')--}}

{{--@push('head')--}}

{{-- <!-- old head--}}
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


{{--            <!-- Roboto Font -->--}}
{{--            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">--}}
{{--            <!-- Font Awesome -->--}}
{{--            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">--}}


{{--            <!-- Scripts-->--}}
{{--            <!-- Styles -->--}}
{{--            <!-- Bootstrap core CSS -->--}}
{{--            <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">--}}
{{--            <!-- Material Design Bootstrap -->--}}
{{--            <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">--}}
{{--            <!-- Material Design Bootstrap Ecommerce -->--}}
{{--            <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">--}}


{{--@endpush--}}

{{--@push('footer')--}}
{{--<!-- old scripts--}}
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


{{--                    <!-- SCRIPTS -->--}}
{{--                    <!-- JQuery -->--}}
{{--                    <script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>--}}
{{--                    <!-- Bootstrap tooltips -->--}}
{{--                    <script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>--}}
{{--                    <!-- Bootstrap core JavaScript -->--}}
{{--                    <script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>--}}
{{--                    <!-- MDB core JavaScript -->--}}
{{--                    <script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>--}}
{{--                    <!-- MDB Ecommerce JavaScript -->--}}
{{--                    <script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>--}}
{{--                    <script>--}}

{{--                    </script>--}}


{{--@endpush--}}

{{--@section('banner', $banner)--}}

{{--@section('content')--}}
{{--    <!-- Deals -->--}}
{{--	@include('frontend.products.deals.index') <br>--}}
{{--	<!-- Laptop Banner -->--}}
{{--	@include('frontend.products.banners.laptop-banner')--}}

{{--	<!-- Hot New Arrivals -->--}}
{{--	@include('frontend.products.new-arrivals.index')--}}


{{--	<!-- Best Sellers -->--}}

{{--	@include('frontend.products.best-seller.index')--}}

{{--	<!-- Recent viewed -->--}}
{{--	@include('frontend.products.recent-viewed.index')--}}


{{--@endsection--}}




    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dragon Web Store</title>
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
    <style>
        @media (min-width: 1100px) {
            .container-xl {
                max-width: 1480px;
            }
        }

        .divider-new.version-2 {
            justify-content: left;
        }

        .divider-new.version-2:before {
            flex: 0;
        }
    </style>

</head>

<body class="skin-light">

<header>

    <!-- Header -->
    <div class="jumbotron white border-bottom mb-0">
        <div class="container-xl py-2">

            <!-- Grid row -->
            <div class="row align-items-center">

                <!-- Grid column -->
                <div class="col-lg-3 col-xl-2 mt-3 mt-lg-0">
                    <a href="#!">
                        <img src="{{asset('Pictures_Project/logo/logo1.jpg')}}" height="58" >

                    </a>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-7 col-lg-5 col-xl-6">

                    <form action="">

                        <div class="md-form md-outline input-group md-input-group w-100">

                            <div class="select-outline">
                                <select class="mdb-select md-form md-outline my-0">
                                    <option value="">All type</option>
                                    <option value="codex">Electronics</option>
                                    <option value="comments">Phones</option>
                                    <option value="content">Tablets</option>
                                    <option value="content">Cameras</option>
                                    <option value="content">Computers</option>
                                    <option value="content">Video Games</option>
                                    <option value="content">TV</option>
                                </select>
                            </div>

                            <input type="text" class="form-control mb-0" placeholder="Search">

                            <div class="input-group-append">
                                <button class="btn btn-primary btn-md px-3" type="submit">
                                    <i class="fa fa-search"></i> Search
                                </button>
                            </div>

                        </div>

                    </form>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 col-xl-4 mt-2 mb-1 mb-md-0 pb-2 pb-md-0">


                    <!-- Icons -->
                    <div class="d-flex justify-content-start justify-content-md-end text-center">

                        <div class="mr-2">

                            <!-- Authentication Links -->
                            @guest
                                <div class="mr-0">
                                    <a href="{{ route('login')}}" role="button">
                                        <div>
                                            <i class="fas fa-sign-in-alt fa-lg"></i>
                                        </div>
                                        <small class="text-dark">{{__('Login')}}</small>
                                    </a>
                                </div>
                                @if (Route::has('register'))

                                @endif
                            @else
                                <div class="mr-2">
                                    <div class="mr-4">
                                        <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <div> <i class="fas fa-user-circle fa-lg "></i></div>
                                            <small class="text-dark">{{ Auth::user()->name }} </small>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                </div>
                                </div>
                            @endguest

                        </div>

                        <div class="mr-4">
                            <a href="{{ route('blog.index')}}" role="button">
                                <div>
                                    <i class="fas fa-blog fa-lg "></i>
                                </div>
                                <small class="text-dark">Blog</small>
                            </a>
                        </div>


                        <div class="mr-4">

                            <a href="{{route('track_order')}}" role="button">
                                <div>
                                    <i class="fas fa-store fa-lg "></i>
                                </div>
                                <small class="text-dark " >Orders</small>
                            </a>

                        </div>
                        <div class="mr-2">

                            <a href="#!" role="button">
                                <div>
                                    <i class="fas fa-shopping-cart fa-lg "></i>
                                </div>
                                <small class="text-dark ">Cart</small>
                            </a>

                        </div>

                    </div>
                    <!-- Icons -->

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
    </div>
    <!-- Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light grey ">

        <div class="container-xl">

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav1"
                    aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav1">

                <!-- Left -->
                <ul class="navbar-nav align-items-start">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i
                                class="fas fa-bars text-muted mr-2"></i> Categories </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('phone')}}">Phones</a>
                            <a class="dropdown-item" href="{{ route('ele')}}">Electronics</a>
                            <a class="dropdown-item" href="{{ route('laptop')}}">Laptops</a>
                            <a class="dropdown-item" href="{{ route('tablet')}}">Tablets</a>
                            <a class="dropdown-item" href="{{ route('game')}}">Video Games</a>
                            <a class="dropdown-item" href="{{ route('camera')}}">Cameras</a>
                            <a class="dropdown-item" href="{{ route('tv')}}">TV</a>
                            <a class="dropdown-item" href="{{ route('headphone')}}">Headphones</a>
                            <a class="dropdown-item" href="{{ route('swatch')}}">Smartwatches</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ready to ship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trade shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell with us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Demo pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('main')}}">Main</a>
                            <a class="dropdown-item" href="{{ route('category')}}">All category</a>
                            <a class="dropdown-item" href="{{ route('checkout')}}">Checkout</a>
                            <a class="dropdown-item" href="{{ route('about_us')}}">Info content</a>
                            <a class="dropdown-item" href="{{ route('login')}}">Page login</a>
                            <a class="dropdown-item" href="{{ route('register')}}">Page register</a>
                            <a class="dropdown-item" href="{{ route('wishlist.wishlist')}}">Wishlist</a>
                            <a class="dropdown-item disabled text-muted" href="#">More components</a>
                        </div>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav ml-md-auto align-items-start">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get the app</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown">English</a>
                        <div class="dropdown-menu dropdown-menu-lg-right">
                            <a class="dropdown-item" href="#">Russian</a>
                            <a class="dropdown-item" href="#">Arabic</a>
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Chinese</a>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- Links -->

        </div>

    </nav>
    <!-- Navbar -->

</header>

<main>

    <div class="container-xl">

        <!-- Section main -->
        <section class="pt-2 mt-4">

            <div class="card">
                <div class="card-body">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-2">
                            <h6>MY MARKETS</h6>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('laptop')
                                }}">Computer Accessories & Peripherals</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('camera')
                                }}">Camera & Photo</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('phone')
                                }}">Mobile Phones</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('ele')
                                }}">Electronics and tech</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('game')
                                }}">Video Game Consoles & Accessories</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="{{ route('tablet')
                                }}">Tablets & Accessories</a></li> <li class="list-group-item pl-0"><a
                                        class="text-grey-dark" href="{{ route('laptop')
                                }}">Laptops & Accessories</a></li>
                                <li class="list-group-item pl-0 dropdown">
                                    <a class="dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">More items</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="{{ route('tablet')}}">Tablet Accessories</a>
                                        <a class="dropdown-item" href="{{ route('headphone')}}">HeadPhone</a>
                                        <a class="dropdown-item" href="{{ route('swatch')}}">Smart Watch </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-8 col-lg-6 col-xl-7">

                            <!--Carousel Wrapper-->
                            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!--/Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(3).jpg"
                                                 alt="First slide">
                                            <a href="#!">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Get extra <b>5%</b> discount</h3>
                                                <p> When you buy your monthly essentials worth of 750$ </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(2).jpg"
                                                 alt="Second slide">
                                            <a href="#!">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Macbook Pro 13 Inch Retina </h3>
                                                <p>Pay with installments </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(1).jpg"
                                                 alt="Third slide">
                                            <a href="#!">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Apple Iphone XS With Facetime</h3>
                                                <p>Pay with installments</p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/Controls-->
                            </div>
                            <!--/Carousel Wrapper-->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 d-none d-lg-block">

                            <h6 class="indigo text-white text-center py-2 mb-4">Popular category</h6>

                            <div class="media">
                                <div class="media-body">
                                    <p class="text-grey-dark mb-2"><strong>Headphone</strong></p>
                                    <a href="{{ route('headphone')
                                }}" type="button" class="btn btn-indigo p-2">Source now</a>
                                </div>
                                <img class="d-flex ml-3"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                                     alt="Generic placeholder image" width="100">
                            </div>

                            <hr>

                            <div class="media">
                                <div class="media-body">
                                    <p class="text-grey-dark mb-2"><strong>Tablet</strong></p>
                                    <a href="{{ route('tablet')
                                }}" type="button" class="btn btn-indigo p-2">Source now</a>
                                </div>
                                <img class="d-flex ml-3" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                     alt="Generic placeholder image" width="100">
                            </div>

                            <hr>

                            <div class="media">
                                <div class="media-body">
                                    <p class="text-grey-dark mb-2"><strong>Iphone</strong></p>
                                    <a href="{{ route('phone')
                                }}" type="button" class="btn btn-indigo p-2">Source now</a>
                                </div>
                                <img class="d-flex ml-3"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg"
                                     alt="Generic placeholder image" width="100">
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
            </div>

        </section>
        <!-- Section main -->

        <!-- Section deal -->
        <section class="py-2 my-4">

            <div class="card">
                <div class="card-body">

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-6">
                        <div class="col flex-grow-1 text-center text-xl-left my-4 my-xl-0">

                            <h4>Deals and offers</h4>
                            <p>Hygiene equipments</p>

                            <div class="d-flex justify-content-center justify-content-xl-start text-center">
                                <div class="mr-2">
                                    <h4 class="mb-0"><span class="badge badge-dark p-2">04</span></h4>
                                    <small>Days</small>
                                </div>
                                <div class="mr-2">
                                    <h4 class="mb-0"><span class="badge badge-dark p-2">12</span></h4>
                                    <small>Hours</small>
                                </div>
                                <div class="mr-2">
                                    <h4 class="mb-0"><span class="badge badge-dark p-2">58</span></h4>
                                    <small>Min</small>
                                </div>
                                <div class="mr-2">
                                    <h4 class="mb-0"><span class="badge badge-dark p-2">02</span></h4>
                                    <small>Sec</small>
                                </div>
                            </div>

                        </div>
                        <div class="col mb-4 mb-xl-0">

                            <div class="view zoom overlay">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                </a>
                            </div>

                            <div class="text-center pt-4">

                                <p class="mb-2 text-muted text-uppercase small">LCD</p>
                                <h6 class="mb-0"><span class="badge badge-danger badge-pill">-20%</span></h6>

                            </div>

                        </div>
                        <div class="col mb-4 mb-xl-0">

                            <div class="view zoom overlay">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                </a>
                            </div>

                            <div class="text-center pt-4">

                                <p class="mb-2 text-muted text-uppercase small">LAPTOP</p>
                                <h6 class="mb-0"><span class="badge badge-danger badge-pill">-20%</span></h6>

                            </div>

                        </div>
                        <div class="col mb-4 mb-xl-0">

                            <div class="view zoom overlay">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                </a>
                            </div>

                            <div class="text-center pt-4">

                                <p class="mb-2 text-muted text-uppercase small">CAMERA</p>
                                <h6 class="mb-0"><span class="badge badge-danger badge-pill">-20%</span></h6>

                            </div>

                        </div>
                        <div class="col mb-4 mb-xl-0">

                            <div class="view zoom overlay">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                </a>
                            </div>

                            <div class="text-center pt-4">

                                <p class="mb-2 text-muted text-uppercase small">TABLET</p>
                                <h6 class="mb-0"><span class="badge badge-danger badge-pill">-20%</span></h6>

                            </div>

                        </div>
                        <div class="col mb-4 mb-xl-0">

                            <div class="view zoom overlay">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                </a>
                            </div>

                            <div class="text-center pt-4">

                                <p class="mb-2 text-muted text-uppercase small">HEADPHONE</p>
                                <h6 class="mb-0"><span class="badge badge-danger badge-pill">-20%</span></h6>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Section deal -->

        <div class="divider-new version-2 mt-5 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Apparel</h4>
        </div>

        <!-- Section apparel -->
        <section class="py-2 my-4">

            <div class="row">
                <div class="col-3">

                    <div class="view z-depth-2 rounded">
                        <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(5).jpg"
                             alt="Sample">
                        <a href="#!" class="text-grey-dark">
                            <div class="mask">
                                <div class="p-3">
                                    <h5>Best Canon EOS R6 Full-Frame </h5>
                                    <p>anon EOS R6 Full-Frame Mirrorless Camera with 4K Video,
                                        DIGIC X Image Processor.
                                    </p>
                                    <button type="button" class="btn btn-outline-black btn-rounded waves-effect">Source now</button>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-9">

                    <div class="card">
                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                desktops, monitors, tablets, PC gaming,accessories and more..
                                            </a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Assiut, Egypt</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Section apparel -->

        <div class="divider-new version-2 mt-5 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Electronics</h4>
        </div>

        <!-- Section electronics -->
        <section class="py-2 my-4">

            <div class="row">
                <div class="col-3">

                    <div class="view z-depth-2 rounded">
                        <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(4).jpg"
                             alt="Sample">
                        <a href="#!" class="text-white">
                            <div class="mask">
                                <div class="p-3">
                                    <h5>Apple 16" MacBook Pro with Touch Bar,</h5>
                                    <p>9th-Gen 8-Core Intel i9 2.4GHz, 32GB RAM, 1TB SSD, AMD Radeon Pro 5500M 8GB,
                                        Space Gray.
                                    </p>
                                    <button type="button" class="btn btn-outline-white btn-rounded waves-effect">Source now</button>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-9">

                    <div class="card">
                        <div class="card-body">

                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Shop laptops,
                                                tablets, PC gaming, hard drives and storage, accessories and
                                                more.</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i>  Assiut, Egypt</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Section electronics -->

        <div class="divider-new version-2 mt-5 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Request for quotation</h4>
        </div>

        <!-- Section request -->
        <section class="py-2 my-4">

            <div class="row">
                <div class="d-none d-lg-block col-lg-12 col-xl-8 mb-lg-4 mb-xl-0">

                    <div class="view z-depth-2 rounded">
                        <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(6).jpg"
                             alt="Sample">
                        <div class="mask rgba-black-light waves-effect waves-light text-white">
                            <div class="p-3">
                                <h4 class="mb-3"> Algmdan.com ships worldwide</h4>
                                <p class="mb-4">Worldwide shipping
                                    We ship to over 100 countries and regions,
                                    right to your doorstep.</p>
                                <button type="button" class="btn btn-outline-white btn-rounded waves-effect">Learn more</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-12 col-xl-4">

                    <div class="card">
                        <div class="card-body">

                            <h4>One Request, Multiple Quotes</h4>

                            <form action="">

                                <div class="md-form md-outline">
                                    <input type="text" id="materialRegisterFormFirstName" class="form-control">
                                    <label for="materialRegisterFormFirstName">What are you looking for?</label>
                                </div>

                                <div class="md-form md-outline input-group md-input-group-secondary w-100">

                                    <input class="form-control mb-0" placeholder="Quantity" name="" type="text">

                                </div>

                            </form>

                            <p>Select template type:</p>

                            <div class="mb-4">
                                <div class="form-check form-check-inline mb-2 mb-md-0">
                                    <input type="checkbox" class="form-check-input filled-in" id="new32">
                                    <label class="form-check-label small text-uppercase card-link-secondary" for="new32">Request
                                        price</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input filled-in" id="new33">
                                    <label class="form-check-label small text-uppercase card-link-secondary" for="new33">Request a
                                        sample</label>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary mb-1">Request for quote</button>

                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- Section request -->

        <div class="divider-new version-2 mt-5 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Recommendations for you</h4>
        </div>

        <!-- Section recommended -->
        <section class="py-2 mt-4">

            <div class="row row-cols-1 row-cols-md-3 row-cols-xl-6">

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Apple iPad</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Apple PC</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Chromebook</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Lenovo </h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>
                                HP Stream</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Just another product name</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Headphone</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Headphone</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Xiaomi</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Appo A30</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Samsung Galaxy</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view zoom overlay">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" alt="Sample">
                            <a href="#!">
                                <div class="mask">

                                </div>
                            </a>
                        </div>

                        <div class="card-body text-center">

                            <h5>Acer Laptop</h5>
                            <h6 class="mb-0"><span>$179.00</span></h6>
                        </div>

                    </div>
                    <!-- Card -->

                </div>

            </div>

        </section>
        <!-- Section recommended -->

        <div class="divider-new version-2 mt-4 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Trade services</h4>
        </div>

        <!-- Section services -->
        <section class="py-2 my-4">

            <div class="row">

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(10).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(7).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(8).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(9).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

            </div>

        </section>
        <!-- Section services -->

        <div class="divider-new version-2 mt-4 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Choose region</h4>
        </div>

        <!-- Section services -->
        <section class="py-2 mt-4 mb-0 mb-lg-4">

            <ul class="d-flex flex-row flex-wrap justify-content-start justify-content-lg-around list-unstyled">
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="china flag"></i> <span>China</span> </a></li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="germany flag"></i> <span>Germany</span> </a>
                </li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="australia flag"></i> <span>Australia</span>
                    </a></li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="russia flag"></i> <span>Russia</span> </a>
                </li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="india flag"></i> <span>India</span> </a></li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="india flag"></i> <span>England</span> </a>
                </li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="turkey flag"></i> <span>Turkey</span> </a>
                </li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="poland flag"></i> <span>Uzbekistan</span> </a>
                </li>
                <li class="mb-2 mx-2"><a href="#" class="text-reset"> <i class="mr-3 fas fa-ellipsis-h"></i> <span>More
                regions</span> </a></li>
            </ul>

        </section>
        <!-- Section services -->

    </div>

</main>

<footer class="page-footer font-small elegant-color mt-4">
    <div class="color-primary">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>

                    <a class="git-ic">
                        <i class="fab fa-github white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <div class="container pt-5">

        <div class="row text-center">
            <div class="col-md-8 col-lg-7 mx-auto">

                <h6>Delivering the latest product trends and industry news straight to your inbox</h6>

                <form action="" class="form-row">

                    <div class="col-md-8">

                        <div class="md-form md-outline">
                            <input type="email" id="defaultForm-email2" class="form-control">
                            <label data-error="wrong" data-success="right" for="defaultForm-email2">Your email</label>
                            <small id="defaultForm-email2" class="form-text text-muted mb-4 text-left">
                                We’ll never share your email address with a third-party.
                            </small>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <button type="button" class="btn btn-block btn-primary btn-md mt-4">Subscribe</button>

                    </div>

                </form>

            </div>
        </div>

    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">

        <!-- Grid row -->
        <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Get to Know Us</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a  href="{{ route('blog.index')}}">Blog</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('about_us')}}">About Algmdan </a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Investor Relations</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Algmdan Tours</a>
                    </li> <li class="mb-2">
                        <a href="#!"> Algmdan Devices</a>
                </ul>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Products</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="#!">Mobile Phone</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Electronics</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Camera</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Laptop</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Tablet</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Video Game</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Useful links</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="#!">Your Account</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Become an Affiliate</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Sell products on Algmdan</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">  Sell apps on Algmdan</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Shipping Rates</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Help</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Contacts</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="fa-ul foot-desc ml-4">
                    <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>Cairo, Alm3z Street 10
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>0114 838 1637</li>
                    <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>algmdan@gmail.com</li>
                    <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
        <a href="http://127.0.0.1:8000/main"> Algmdan.com</a>
    </div>

    <!-- Copyright -->

</footer>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
    <!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
        $(function () {
            $('.material-tooltip-main').tooltip({
                template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
            });
        });

        $(document).ready(function () {
            $('.mdb-select').materialSelect();
            $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
                $(this).closest('.select-outline').find('label').toggleClass('active');
                $(this).closest('.select-outline').find('.caret').toggleClass('active');
            });
        });
    </script>
</body>

</html>
