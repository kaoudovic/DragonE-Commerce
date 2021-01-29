
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


<section class="mt-5 mb-4">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card wish-list pb-1">
                <div class="card-body">

                    <h5 class="mb-2">Billing details</h5>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-6">

                            <!-- First name -->
                            <div class="md-form md-outline mb-0 mb-lg-4">
                                <input type="text" id="firstName" class="form-control mb-0 mb-lg-2">
                                <label for="firstName">First name</label>
                            </div>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-6">

                            <!-- Last name -->
                            <div class="md-form md-outline">
                                <input type="text" id="lastName" class="form-control">
                                <label for="lastName">Last name</label>
                            </div>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                    <!-- Company name -->
                    <div class="md-form md-outline my-0">
                        <input type="text" id="companyName" class="form-control mb-0">
                        <label for="companyName">Company name (optional)</label>
                    </div>

                    <!-- Country -->
                    <div class="d-flex flex-wrap">
                        <div class="select-outline position-relative w-100">
                            <select class="mdb-select md-form md-outline">
                                <option value="" disabled="" selected="">Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Country</label>
                        </div>
                    </div>

                    <!-- Address Part 1 -->
                    <div class="md-form md-outline mt-0">
                        <input type="text" id="form14" placeholder="House number and street name" class="form-control">
                        <label for="form14" class="active">Address</label>
                    </div>

                    <!-- Address Part 2 -->
                    <div class="md-form md-outline">
                        <input type="text" id="form15" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
                        <label for="form15" class="active">Address</label>
                    </div>

                    <!-- Postcode / ZIP -->
                    <div class="md-form md-outline">
                        <input type="text" id="form16" class="form-control">
                        <label for="form16">Postcode / ZIP</label>
                    </div>

                    <!-- Town / City -->
                    <div class="md-form md-outline">
                        <input type="text" id="form17" class="form-control">
                        <label for="form17">Town / City</label>
                    </div>

                    <!-- Phone -->
                    <div class="md-form md-outline">
                        <input type="number" id="form18" class="form-control">
                        <label for="form18">Phone</label>
                    </div>

                    <!-- Email address -->
                    <div class="md-form md-outline">
                        <input type="email" id="form19" class="form-control">
                        <label for="form19">Email address</label>
                    </div>

                    <!-- Additional information -->
                    <div class="md-form md-outline">
                        <textarea id="form76" class="md-textarea form-control" rows="4"></textarea>
                        <label for="form76">Additional information</label>
                    </div>

                    <div class="form-check pl-0 mb-4 mb-lg-0">
                        <input type="checkbox" class="form-check-input filled-in" id="new3">
                        <label class="form-check-label small text-uppercase card-link-secondary" for="new3">Create an
                            account?</label>
                    </div>

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

                    <button type="button" class="btn btn-primary btn-block waves-effect waves-light">Make
                        purchase</button>

                </div>
            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card mb-4">
                <div class="card-body">

                    <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Add a discount code (optional)
                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                    </a>

                    <div class="collapse" id="collapseExample">
                        <div class="mt-3">
                            <div class="md-form md-outline mb-0">
                                <input type="text" id="discount-code" class="form-control font-weight-light" placeholder="Enter discount code">
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
<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
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
