
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

<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
    <!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h3 class="mb-0">Shopping cart</h3>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Block Content-->
        <section class="mt-5 mb-4">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-8">

                    <!-- Card -->
                    <div class="card wish-list mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Cart (<span>2</span> items)</h5>

                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg" alt="Sample">
                                        <a href="#!">
                                            <div class="mask waves-effect waves-light">
                                                <img class="img-fluid w-100"
                                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                                                <div class="mask rgba-black-slight waves-effect waves-light"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Blue denim shirt</h5>
                                                <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                                                <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                                                <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus"></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus"></button>
                                                </div>
                                                <small id="passwordHelpBlock" class="form-text text-muted text-center">
                                                    (Note, 1 piece)
                                                </small>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                                                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                                            </div>
                                            <p class="mb-0"><span><strong>$17.99</strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <div class="row mb-4">
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg" alt="Sample">
                                        <a href="#!">
                                            <div class="mask waves-effect waves-light">
                                                <img class="img-fluid w-100"
                                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                                <div class="mask rgba-black-slight waves-effect waves-light"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Red hoodie</h5>
                                                <p class="mb-3 text-muted text-uppercase small">Hoodie - red</p>
                                                <p class="mb-2 text-muted text-uppercase small">Color: red</p>
                                                <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                                            </div>
                                            <div>
                                                <div class="def-number-input number-input safari_only mb-0 w-100">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                            class="minus"></button>
                                                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                            class="plus"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase mr-3"><i
                                                        class="fas fa-trash-alt mr-1"></i> Remove item </a>
                                                <a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                                                        class="fas fa-heart mr-1"></i> Move to wish list </a>
                                            </div>
                                            <p class="mb-0"><span><strong>$35.99</strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
                                items to your cart does not mean booking them.</p>

                        </div>
                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">Expected shipping delivery</h5>

                            <p class="mb-0"> Thu., 12.03. - Mon., 16.03.</p>
                        </div>
                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">
                        <div class="card-body">

                            <h5 class="mb-4">We accept</h5>

                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                                 alt="Visa">
                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                                 alt="American Express">
                            <img class="mr-2" width="45px"
                                 src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                                 alt="Mastercard">
                            <img class="mr-2" width="45px"
                                 src="http://www.sunsetdhowsafari.com/wp-content/uploads/2016/01/Paypal-PNG-Image-37253.png"
                                 alt="PayPal acceptance mark">
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
                                    <span>$53.98</span>
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
                                    <span><strong>$53.98</strong></span>
                                </li>
                            </ul>

                            <button type="button" class="btn btn-primary btn-block waves-effect waves-light">Proceed to checkout</button>

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

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->

<!-- Footer -->
@include('layouts.footer')
<!-- Footer -->

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
