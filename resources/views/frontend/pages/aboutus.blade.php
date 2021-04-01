
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

    <link rel="stylesheet" href="{{ asset('assets/new/css/algolia.css') }}">
    <link rel="icon" sizes="192x192" href="{{asset('Pictures_Project/logo/logo.png')}}">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="skin-light">

<!-- Main Navigation -->
<header>

    <!-- Navbar -->
@include('layouts.header')
    <!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h1 class="mb-0">About Dragon.com</h1>
            </div>
        </div>
    </div>

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>
    <div class="container mt-4 mb-5">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-5">

                <img class="img-fluid rounded z-depth-2" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(21).jpg" alt="sample">

            </div>
            <!-- Grid column -->

            <!-- Grid column -->

            <div class="col-lg-7">
                <br><br>
                Welcome to  <b><i>Dragon.com</i></b>– the Middle East’s online marketplace.
                <br><br>
                We connect people and products – opening up a world of possibility. From bracelets and backpacks to tablets and toy cars – we give you access to everything you need and want. Our range is unparalleled, and our prices unbeatable.
                <br><br>
                Driven by smart technology, everything we do is designed to put the power directly in your hands – giving you the freedom to shop however, whenever and wherever you like.
                <br><br>
                We’re trusted by millions, because we don’t just deliver to your doorstep, we were born here. With
                <b><i>Dragon.com</i></b>  you’ll always be getting a good deal – with exceptional service that makes your shopping experience as easy and seamless as possible.
                <br><br>
                This is <b><i>Dragon.com</i></b> – the power is in your hands.

                <br><br>

                Our logo might have evolved over the years, but our focus - the same.

                <div class="row text-center">
                    <img class="fa-text-width" style="width: 550px"
                         src="{{asset('Pictures_Project/logo/logo1.jpg')}}" alt="Dragon Logo Evolution">
                </div>

                <br><br>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
</main>
<!-- Main layout -->

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


<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>

</html>
