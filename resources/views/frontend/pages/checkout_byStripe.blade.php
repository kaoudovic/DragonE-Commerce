
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


    <script src="https://js.stripe.com/v3/"></script>
  <style>

      /* Variables */
      * {
          box-sizing: border-box;
      }

      body {
          font-family: -apple-system, BlinkMacSystemFont, sans-serif;
          font-size: 16px;
          -webkit-font-smoothing: antialiased;
          display: flex;
          justify-content: center;
          align-content: center;
          height: 100vh;
          width: 100vw;
      }

      form {
          width: 30vw;
          min-width: 500px;
          align-self: center;
          box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
          0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
          border-radius: 7px;
          padding: 40px;
      }

      input {
          border-radius: 6px;
          margin-bottom: 6px;
          padding: 12px;
          border: 1px solid rgba(50, 50, 93, 0.1);
          height: 44px;
          font-size: 16px;
          width: 100%;
          background: white;
      }

      .result-message {
          line-height: 22px;
          font-size: 16px;
      }

      .result-message a {
          color: rgb(89, 111, 214);
          font-weight: 600;
          text-decoration: none;
      }

      .hidden {
          display: none;
      }

      #card-error {
          color: rgb(105, 115, 134);
          text-align: left;
          font-size: 13px;
          line-height: 17px;
          margin-top: 12px;
      }

      #card-element {
          border-radius: 4px 4px 0 0 ;
          padding: 12px;
          border: 1px solid rgba(50, 50, 93, 0.1);
          height: 44px;
          width: 100%;
          background: white;
      }

      #payment-request-button {
          margin-bottom: 32px;
      }

      /* Buttons and links */
      button {
          background: #5469d4;
          color: #ffffff;
          font-family: Arial, sans-serif;
          border-radius: 0 0 4px 4px;
          border: 0;
          padding: 12px 16px;
          font-size: 16px;
          font-weight: 600;
          cursor: pointer;
          display: block;
          transition: all 0.2s ease;
          box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
          width: 100%;
      }
      button:hover {
          filter: contrast(115%);
      }
      button:disabled {
          opacity: 0.5;
          cursor: default;
      }

      /* spinner/processing state, errors */
      .spinner,
      .spinner:before,
      .spinner:after {
          border-radius: 50%;
      }
      .spinner {
          color: #ffffff;
          font-size: 22px;
          text-indent: -99999px;
          margin: 0px auto;
          position: relative;
          width: 20px;
          height: 20px;
          box-shadow: inset 0 0 0 2px;
          -webkit-transform: translateZ(0);
          -ms-transform: translateZ(0);
          transform: translateZ(0);
      }
      .spinner:before,
      .spinner:after {
          position: absolute;
          content: "";
      }
      .spinner:before {
          width: 10.4px;
          height: 20.4px;
          background: #5469d4;
          border-radius: 20.4px 0 0 20.4px;
          top: -0.2px;
          left: -0.2px;
          -webkit-transform-origin: 10.4px 10.2px;
          transform-origin: 10.4px 10.2px;
          -webkit-animation: loading 2s infinite ease 1.5s;
          animation: loading 2s infinite ease 1.5s;
      }
      .spinner:after {
          width: 10.4px;
          height: 10.2px;
          background: #5469d4;
          border-radius: 0 10.2px 10.2px 0;
          top: -0.1px;
          left: 10.2px;
          -webkit-transform-origin: 0px 10.2px;
          transform-origin: 0px 10.2px;
          -webkit-animation: loading 2s infinite ease;
          animation: loading 2s infinite ease;
      }

      @-webkit-keyframes loading {
          0% {
              -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
          }
          100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
          }
      }
      @keyframes loading {
          0% {
              -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
          }
          100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
          }
      }

      @media only screen and (max-width: 600px) {
          form {
              width: 80vw;
          }
      }


  </style>

</head>

<body class="skin-light">


<!--Main Navigation-->
<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a href="{{ route('home') }}">
                <img src="{{asset('Pictures_Project/logo/logo1.jpg')}}" height="50">
            </a>


            {{-- Search--}}

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('about_us')}}" class="nav-link waves-effect">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop.index')}}" class="nav-link waves-effect">
                            Shop
                        </a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="{{ route('blog.index')}}" class="nav-link waves-effect">--}}
                    {{--                            Blog--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('contact.index')}}"  class="nav-link waves-effect">
                            Contact
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect
                                waves-light" href="{{ route('register') }}">{{ __('SignUp') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="mr-4 ml3">
                            <li  class="nav-item pl-2 mb-2 mb-md-1" >
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
                            </li>
                        </div>
                    @endguest

                    <div class="mr-4">
                        <li class="nav-item pl-2 mb-2 mb-md-0">
                            <a href="{{route('track_order')}}" role="button">
                                <div> <i class="fas fa-store fa-lg "></i></div>
                                <small class="text-dark">Orders</small>
                            </a>
                        </li>
                    </div>

                    <div class="mr-3">

                        <li class="nav-item" >
                            <a href="{{route('cart.index')}}" role="button">
                                <div> <i class="fas fa-shopping-cart fa-lg "></i></div>
                                <small class="text-dark">Cart</small>
                                @if (Cart::instance('default')->count() > 0)
                                    <span class="badge badge-pill red">{{ Cart::count() }}</span>
                                @endif
                            </a>
                        </li>
                    </div>



                </ul>



            </div>
            <!-- Links -->
        </div>
    </nav>


</header>

<main>
      <div class="">
          <div class="jumbotron color-grey-light mt-70">
              <div class="d-flex align-items-center h-100">
                  <div class="container text-center py-5">
                      <h3 class="mb-0">Checkout ${{ Cart::total() }}</h3>
                  </div>
              </div>
          </div>


        <form action="/charge" method="post" id="payment-form">
            {{csrf_field()}}
            <input type="hidden" name="amount" value="{{Cart::total()}}">
            <div class="">
                <label for="card-element">
                  Please Enter Your Credit or Debit card
                </label>
                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display Element errors. -->
                <div id="card-errors" role="alert"></div>
            </div>

            <button>Submit Payment</button>
        </form>

      </div>

</main>
<!--Main layout-->
<!-- Footer -->
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>

</html>
