
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



    {{--    <script src="https://js.stripe.com/v3/"></script>--}}

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

                        <form action="{{ route('checkout.store') }}" method="POST" >
                            {{ csrf_field() }}
                            <h2>Billing Details</h2>

                            <div class="form-group">
                                <label for="email">Email Address {{cart::tax()}}</label>
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
                                    <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                                </div>
                            </div> <!-- end half-form -->


                            <button type="submit" id="complete-order" class=" btn btn-primary btn-block waves-effect
                            waves-light">Complete Order And Payment Process</button>

                        </form>

{{--                        <form action="/charge" method="post" id="payment-form">--}}
{{--                            {{csrf_field()}}--}}
{{--                            <div class="spacer"></div>--}}

{{--                            <h2>Payment Details</h2>--}}

{{--                            <div class="form-group">--}}
{{--                                <label for="name_on_card">Name on Card</label>--}}
{{--                                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <input type="hidden" name="amount" value="{{Cart::total()}}">--}}
{{--                                <div class="">--}}
{{--                                    <label for="card-element">--}}
{{--                                        Credit or debit card--}}
{{--                                    </label>--}}
{{--                                    <div id="card-element">--}}
{{--                                        <!-- A Stripe Element will be inserted here. -->--}}
{{--                                    </div>--}}

{{--                                    <!-- Used to display Element errors. -->--}}
{{--                                    <div id="card-errors" role="alert"></div>--}}
{{--                                </div>--}}

{{--                                <button>Submit Payment</button>--}}
{{--                            </div>--}}

{{--                        </form>--}}

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
                                            </div>
                                            <button type="submit">Apply</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
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


{{--<script>--}}

{{--    window.onload=function (){--}}

{{--        // Set your publishable key: remember to change this to your live publishable key in production--}}
{{--        // See your keys here: https://dashboard.stripe.com/account/apikeys--}}
{{--        var stripe = Stripe('pk_test_51IWeaaGbZUDH5gEQtPEBIhUnLuPjxhS9kvgmtTkc1SYb3dz97ddGWyWCEfvskxkOMDH7Dz7uvXV4x1Fn1X8fV8xd00PPFFhlB6');--}}
{{--        var elements = stripe.elements();--}}

{{--        // Custom styling can be passed to options when creating an Element.--}}
{{--        var style = {--}}
{{--            base: {--}}
{{--                // Add your base input styles here. For example:--}}
{{--                fontSize: '16px',--}}
{{--                color: '#32325d',--}}
{{--            },--}}
{{--        };--}}

{{--        // Create an instance of the card Element.--}}
{{--        var card = elements.create('card', {style: style});--}}

{{--        // Add an instance of the card Element into the `card-element` <div>.--}}
{{--        card.mount('#card-element');--}}


{{--        // Create a token or display an error when the form is submitted.--}}
{{--        var form = document.getElementById('payment-form');--}}
{{--        form.addEventListener('submit', function(event) {--}}
{{--            event.preventDefault();--}}

{{--            stripe.createToken(card).then(function(result) {--}}
{{--                if (result.error) {--}}
{{--                    // Inform the customer that there was an error.--}}
{{--                    var errorElement = document.getElementById('card-errors');--}}
{{--                    errorElement.textContent = result.error.message;--}}
{{--                } else {--}}
{{--                    // Send the token to your server.--}}
{{--                    stripeTokenHandler(result.token);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}

{{--        function stripeTokenHandler(token) {--}}
{{--            // Insert the token ID into the form so it gets submitted to the server--}}
{{--            var form = document.getElementById('payment-form');--}}
{{--            var hiddenInput = document.createElement('input');--}}
{{--            hiddenInput.setAttribute('type', 'hidden');--}}
{{--            hiddenInput.setAttribute('name', 'stripeToken');--}}
{{--            hiddenInput.setAttribute('value', token.id);--}}
{{--            form.appendChild(hiddenInput);--}}

{{--            // Submit the form--}}
{{--            form.submit();--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
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
