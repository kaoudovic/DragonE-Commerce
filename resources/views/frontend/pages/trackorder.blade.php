

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


    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('assets/new/js/algolia.js') }}"></script>
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
                <h3 class="mb-0">Order tracking</h3>
            </div>
        </div>
    </div>

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>
    <div class="container">

        <!-- Grid row -->
        <div class="row d-flex justify-content-center">

            <!-- Grid column -->
            <div class="col-md-6">

                <!--Section: Block Content-->
                <section class="my-4">

                    <h5 class="text-center mt-1 mb-4">Contact us</h5>

                    <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

                    <form action="#!">

                        <div class="md-form md-outline">
                            <input type="text" id="orderID" class="form-control">
                            <label for="orderID">Order ID</label>
                        </div>

                        <div class="md-form md-outline">
                            <input type="email" id="billingEmail" class="form-control">
                            <label for="billingEmail">Billing email</label>
                        </div>

                    </form>

                    <div class="text-center pt-2 mb-4">

                        <button type="submit" class="btn btn-primary mb-4">Sign Up</button>

                    </div>

                </section>
                <!--Section: Block Content-->

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
<!-- JQuery --><script type="text/javascript" src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
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

<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')

        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')

                axios.patch(`cart/${id}`, {
                    quantity: this.value,
                    productQuantity: productQuantity
                })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                        // console.log(error);
                        window.location.href = '{{ route('cart.index') }}'
                    });
            })
        })
    })();
</script>
</body>

</html>
<div class="col-lg-4">

    <!-- Card -->
    <div class="card mb-4">
        <div class="card-body">

            <h5 class="mb-3">The total amount of</h5>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Temporary amount
                    <span>${{Cart::subtotal(2,'.',',')}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Taxes(10%)
                    <span>${{Cart::tax(2,'.',',')}}</span>
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
                    <span><strong>${{Cart::total(2,'.',',')}}</strong></span>
                </li>
            </ul>
            <a  href="{{route('checkout.stripe',Cart::total(2,'.',','))}}" class=" btn btn-primary btn-block
                            waves-effect
                            waves-light">
                Proceed to checkout
            </a>

        </div>
    </div>
    <!-- Card -->

    <!-- Card -->
    <div class="card mb-4">
        <div class="card-body">

            <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample"
               aria-expanded="false" aria-controls="collapseExample">
                Add a discount code (optional)
                <span><i class="fas fa-chevron-down pt-1"></i></span>
            </a>

            <div class="collapse" id="collapseExample">
                <div class="mt-3">
                    <div class="md-form md-outline mb-0">
                        <input type="text" id="discount-code" class="form-control font-weight-light"
                               placeholder="Enter discount code">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card -->
    {{--                    <span>{{ date("Y-m-d H-i-s a")  }}</span>--}}
</div>
