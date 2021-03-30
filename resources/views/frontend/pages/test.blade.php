
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


    <script src="https://js.stripe.com/v3/"></script>

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
                <h3 class="mb-0">Checkout</h3>
            </div>
        </div>
    </div>

</header>

<main>
    <div class="container">

        <div class="container">

            @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        <!--Section: Block Content-->
            <section class="mt-5 mb-4">

                <!--Grid row-->
                <div class="row">


                    <!--Grid column-->
                    <div class="col-lg-8 mb-4">
                        <!-- Card -->
                        <div class="card wish-list pb-1">
                            <div class="card-body">
                                <h5 class="mb-2">Billing details</h5>
                                <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                                    {{ csrf_field() }}
                                    <h2>Billing Details</h2>

                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        @if (auth()->user())
                                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                                        @else
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                                    </div>

                                    <div class="half-form">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                                        </div>
                                    </div> <!-- end half-form -->

                                    <div class="half-form">
                                        <div class="form-group">
                                            <label for="postalcode">Postal Code</label>
                                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                        </div>
                                    </div> <!-- end half-form -->

                                    <div class="spacer"></div>

                                    <h2>Payment Details</h2>

                                    <div class="form-group">
                                        <label for="name_on_card">Name on Card</label>
                                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                                    </div>
                                    <button type="submit" > submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!--Grid column-->




                    <!--Grid column-->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="card mb-4">
                            <div class="card-body">

                                <h5 class="mb-3">The total amount of</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Temporary amount
                                        <span>${{Cart::subtotal()}}</span>
                                    </li>
                                    @if (session()->has('coupon'))

                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0
                                 px-0 pb-0" style="">
                                            Code ({{ session()->get('coupon')['name'] }})
                                            <form action="{{ route('coupon.destroy') }}" method="POST" style="display:block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" title="Remove" class="btn btn-link
                                            material-tooltip-main"><i
                                                        class="fas fa-times"></i></button>
                                            </form>
                                            <hr>
                                            <span>-${{ session()->get('coupon')['discount']}}</span>
                                            @endif
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                            Taxes(10%)
                                            <span>${{Cart::tax()}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                            Shipping
                                            <span>Gratis</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                            <div>
                                                <strong>The total amount of</strong>
                                                <strong>
                                                    <p class="mb-0">(including VAT)</p>
                                                </strong>
                                            </div>
                                            <span><strong>${{Cart::total()}}</strong></span>
                                        </li>
                                </ul>
                                @if (! session()->has('coupon'))

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form action="{{route('coupon.store')}}" method="post">
                                                {{csrf_field()}}
                                                <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
                                                   aria-expanded="false" aria-controls="collapseExample">
                                                    Add a discount code (optional)
                                                    <span><i class="fas fa-chevron-down pt-1"></i></span>
                                                </a>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="mt-3">
                                                        <div class="md-form md-outline mb-0">
                                                            <input type="text" id="coupon-code" class="form-control font-weight-light"
                                                                   name="coupon_code" placeholder="Enter discount code">
                                                        </div>
                                                    </div>
                                                    <span><strong>${{Cart::total()}}</strong></span>

                                                </div>
                                                <button type="submit">Apply</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif

                                <a  href="{{route('checkout.stripe',Cart::total(2,'.',','))}}" class=" btn btn-primary btn-block waves-effect
                            waves-light">Proceed to checkout
                                </a>
                            </div>
                        </div>
                        <!-- Card -->

                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </div>
            </section>

        </div>
        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->
<!-- Footer -->
@include('layouts.footer')
<!-- Footer -->


<script>

    window.onload=function (){

        // Set your publishable key: remember to change this to your live publishable key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        var stripe = Stripe('pk_test_51IWeaaGbZUDH5gEQtPEBIhUnLuPjxhS9kvgmtTkc1SYb3dz97ddGWyWCEfvskxkOMDH7Dz7uvXV4x1Fn1X8fV8xd00PPFFhlB6');
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: '#32325d',
            },
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');


        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    }
</script>
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


<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>
<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>

</body>

</html>
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
                        <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35">
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
                                    <option value="codex">Special</option>
                                    <option value="comments">Only best</option>
                                    <option value="content">Latest</option>
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

                        <div class="mr-4">

                            <a href="#!" role="button">
                                <div>
                                    <i class="fas fa-user fa-lg text-muted"></i>
                                    <span
                                        class="counter counter-floating counter-lg-icon position-absolute ml-n1 mt-1"><strong>3</strong></span>
                                </div>
                                <small class="text-dark">My profile</small>
                            </a>

                        </div>
                        <div class="mr-4">

                            <a href="#!" role="button">
                                <div>
                                    <i class="fas fa-comment-dots fa-lg text-muted"></i>
                                    <span
                                        class="counter counter-floating counter-lg-icon position-absolute ml-n1 mt-1"><strong>1</strong></span>
                                </div>
                                <small class="text-dark">Message</small>
                            </a>

                        </div>
                        <div class="mr-4">

                            <a href="#!" role="button">
                                <div>
                                    <i class="fas fa-store fa-lg text-muted"></i>
                                </div>
                                <small class="text-dark">Orders</small>
                            </a>

                        </div>
                        <div class="mr-0">

                            <a href="#!" role="button">
                                <div>
                                    <i class="fas fa-shopping-cart fa-lg text-muted"></i>
                                </div>
                                <small class="text-dark">Cart</small>
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

                <!-- Right -->
                <ul class="navbar-nav ml-md-auto align-items-start">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get the app</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown">English</a>
                        <div class="dropdown-menu dropdown-menu-lg-right">
                            <a class="dropdown-item" href="#">Russian</a>
                            <a class="dropdown-item" href="#">French</a>
                            <a class="dropdown-item" href="#">Spanish</a>
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

<footer class="page-footer font-small elegant-color mt-4">

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
                <h5>About me</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <p class="foot-desc mb-0">Here you can use rows and columns to organize your footer content. Lorem
                    ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>

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
                        <a href="#!">MDBootstrap</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">MDWordPress</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">BrandFlow</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!">Bootstrap Angular</a>
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
                    <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>New York, Avenue Street 10
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>042 876 836 908</li>
                    <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>company@example.com</li>
                    <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="js/mdb.ecommerce.min.js"></script>
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


<body class="skin-light">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
<!-- Navbar -->


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

    <script>
        $(document).ready(function () {
            // MDB Lightbox Init
            $(function () {
                $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
            });
        });
    </script>
