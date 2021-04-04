<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
@include('layouts.header')
<!-- Header -->
    <br>
    <br>
    <br>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">

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
                            @if(count($categories))
                                @foreach($categories as $category)
                                    <a class="dropdown-item" href="/shop?category={{$category->slug}}">{{$category->name}}</a>
                                @endforeach
                            @else
                                <a class="dropdown-item">Not found</a>
                            @endif
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">pages</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('shop.index')}}">Shop</a>
                            <a class="dropdown-item" href="{{ route('about_us')}}">About</a>
                            <a class="dropdown-item" href="{{ route('contact.index')}}">Contact</a>
                            <a class="dropdown-item" href="{{ route('blog.index')}}">Blog</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{ route('contact.index')}}">Contact-us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{ route('about_us')}}">About Dragon.com</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light" href="{{ route('blog.index')}}">Blog</a>
                    </li>

                </ul>
            </div>
            <!-- Links -->

        </div>

    </nav>
    <!-- Navbar -->

</header>
