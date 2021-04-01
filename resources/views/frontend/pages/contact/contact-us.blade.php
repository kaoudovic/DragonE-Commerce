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

<!--Main Navigation-->
<header>
    @include('layouts.header')

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h1 class="mb-0">Contact</h1>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Content-->
        <section class="text-center text-lg-left dark-grey-text mb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-12">

                    <style>
                        .map-container {
                            height: 300px;
                            width: 100%;
                            position: relative;
                        }

                        .map-container iframe {
                            left: 0;
                            top: 0;
                            height: 100%;
                            width: 100%;
                            position: absolute;
                        }
                    </style>

                    <!--Google map-->
                    <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28429.29095496525!2d31.299657543949845!3d27.040864390996905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1611473753377!5m2!1spl!2spl"
                            frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    <!--Google Maps-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

                            <h4 class="mb-3"><strong>Office</strong></h4>

                            <hr>

                            <p class="mb-1"><strong>Address:</strong> </p>
                            <p class="mb-1">Alrhpa Abo-Tig Street 10</p>
                            <p class="mb-1">ASSIUT</p>
                            <p class="mb-1">EGYPT</p>

                            <hr>

                            <p class="mb-1"><strong>Company tax ID:</strong> </p>

                            <p class="mb-1">US2542911940</p>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-7 col-md-12 mb-4 mb-md-0 text-center">

                            <!-- Form -->
                            <form class="" action="{{ route('contact.store') }}">
                                {{csrf_field()}}

                                <div class="md-form md-outline">
                                    <input type="text"  name="name" id="form-subject" class="form-control">
                                    <label for="form-subject">Name</label>
                                </div>

                                <div class="md-form md-outline mt-3">
                                    <input type="email" id="form-email"  name="email" class="form-control">
                                    <label for="form-email">E-mail</label>
                                </div>

                                <div class="md-form md-outline">
                                    <textarea id="form76" name="message" class="md-textarea form-control"
                                              rows="4"></textarea>
                                    <label for="form76">Your message</label>

                                </div>

                                <button type="submit" class="btn btn-primary btn-md ml-0 waves-effect waves-light">Send</button>

                            </form>




                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


        </section>
        <!--Section: Content-->


    </div>
</main>
<!--Main layout-->

<!-- Footer -->
@include('layouts.footer')


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
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>--}}
@include('sweet::alert')
</body>

</html>
