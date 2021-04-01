

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
                            <a class="dropdown-item" href="#">Machinery</a>
                            <a class="dropdown-item" href="#">Electronics</a>
                            <a class="dropdown-item" href="#">Home textile</a>
                            <a class="dropdown-item" href="#">Home and kitchen</a>
                            <a class="dropdown-item" href="#">Service and equipment</a>
                            <a class="dropdown-item" href="#">Healthcare items</a>
                            <a class="dropdown-item" href="#">Toys and Hobbies</a>
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
                            <a class="dropdown-item" href="page-index.html">Main</a>
                            <a class="dropdown-item" href="page-category.html">All category</a>
                            <a class="dropdown-item" href="page-listing-large.html">Listing list</a>
                            <a class="dropdown-item" href="page-listing-grid.html">Listing grid</a>
                            <a class="dropdown-item" href="page-shopping-cart.html">Shopping cart</a>
                            <a class="dropdown-item" href="page-detail-product.html">Item detail</a>
                            <a class="dropdown-item" href="page-content.html">Info content</a>
                            <a class="dropdown-item" href="page-user-login.html">Page login</a>
                            <a class="dropdown-item" href="page-user-register.html">Page register</a>
                            <a class="dropdown-item disabled text-muted" href="#">More components</a>
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
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Fashion and clothes</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Automobile and motors</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Gardening and agriculture</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Electronics and tech</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Packaginf and printing</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Home and kitchen</a></li>
                                <li class="list-group-item pl-0"><a class="text-grey-dark" href="#">Digital goods</a></li>
                                <li class="list-group-item pl-0 dropdown">
                                    <a class="dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">More items</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Submenu name</a>
                                        <a class="dropdown-item" href="#">Great submenu</a>
                                        <a class="dropdown-item" href="#">Another menu</a>
                                        <a class="dropdown-item" href="#">Some others</a>
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
                                            <h3 class="h3-responsive">First shop item</h4>
                                                <p>First text</p>
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
                                            <h3 class="h3-responsive">Second shop item</h4>
                                                <p>Secondary text</p>
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
                                            <h3 class="h3-responsive">Third shop item</h4>
                                                <p>Third text</p>
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
                                    <p class="text-grey-dark mb-2"><strong>Men clothing</strong></p>
                                    <a href="#!" type="button" class="btn btn-indigo p-2">Source now</a>
                                </div>
                                <img class="d-flex ml-3"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                                     alt="Generic placeholder image" width="100">
                            </div>

                            <hr>

                            <div class="media">
                                <div class="media-body">
                                    <p class="text-grey-dark mb-2"><strong>Men clothing</strong></p>
                                    <a href="#!" type="button" class="btn btn-indigo p-2">Source now</a>
                                </div>
                                <img class="d-flex ml-3" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                     alt="Generic placeholder image" width="100">
                            </div>

                            <hr>

                            <div class="media">
                                <div class="media-body">
                                    <p class="text-grey-dark mb-2"><strong>Men clothing</strong></p>
                                    <a href="#!" type="button" class="btn btn-indigo p-2">Source now</a>
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

                                <p class="mb-2 text-muted text-uppercase small">Summer clothes</p>
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

                                <p class="mb-2 text-muted text-uppercase small">Summer clothes</p>
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

                                <p class="mb-2 text-muted text-uppercase small">Summer clothes</p>
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

                                <p class="mb-2 text-muted text-uppercase small">Summer clothes</p>
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

                                <p class="mb-2 text-muted text-uppercase small">Summer clothes</p>
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
                                    <h5>Best trending clothes only for summer</h5>
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
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
                                    <h5>Best trending clothes only for summer</h5>
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/16.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
                                    </div>
                                </div>

                                <div class="col mb-4 mb-xl-0 pb-2">
                                    <div class="view zoom overlay">
                                        <h5 class="mt-0"><a href="#" class="text-reset stretched-link">Well made women clothes with
                                                trending collection</a></h5>
                                        <img class="float-right"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="Sample"
                                             width="110">
                                        <p><i class="fa fa-map-marker-alt"></i> Guanjou, China</p>
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
                                <h4 class="mb-3">Best trending clothes only for summer</h4>
                                <p class="mb-4">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. </p>
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

                                    <div class="select-outline">
                                        <select class="mdb-select md-form md-outline my-0">
                                            <option>Pieces</option>
                                            <option>Litres</option>
                                            <option>Tons</option>
                                            <option>Gramms</option>
                                        </select>
                                    </div>

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
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Recommended items</h4>
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/3.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/4.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="Sample">
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
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" alt="Sample">
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
@include('sweet::alert')

@include('layouts.footer')

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
