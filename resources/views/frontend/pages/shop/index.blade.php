@extends('layouts.master')

@push('head')
//
// <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
// <link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/shop_styles.css')}}">
// <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/shop_responsive.css')}}">
//
//


 //<!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
   // <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">


    //<!-- Scripts-->
    //<!-- Styles -->
   // <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">
    //<!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">
    //<!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">
@endpush

@push('footer')

// <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
// <script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
// <script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
// <script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
// <script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
// <script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
// <script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
// <script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
// <script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
// <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
// <script src="{{asset('assets/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
// <script src="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
// <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
// <script src="{{asset('assets/js/shop_custom.js')}}"></script>

 //<!-- SCRIPTS -->
   // <!-- JQuery -->
    <script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
    //<!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
    //<!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>
    //<!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
    //<!-- MDB Ecommerce JavaScript -->
    <script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>
    <script>

    </script>


@endpush

@section('banner', $banner)
@section('content')
    	<!-- Shop -->

	<div class="shop"  id="cat">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					@include('frontend.pages.shop.sidebar')

				</div>

				<div class="col-lg-9">

					<!-- Shop Content -->
					@include('frontend.pages.shop.content')


				</div>
			</div>
		</div>
	</div>
@endsection
