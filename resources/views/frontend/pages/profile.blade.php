

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
    <link rel="icon" sizes="192x192" href="{{asset('Pictures_Project/logo/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/new/css/algolia.css') }}">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
</header>
<!-- Main Navigation -->

<div class="jumbotron color-grey-light mt-70">
    <div class="d-flex align-items-center ">
        <div class="container text-center py-5">
            <h1 class="">Profile Page</h1>
        </div>
    </div>
</div>

<!-- Main layout -->
<main>

    @if(session()->has('success_massage') )
        <div class="alert alert-success" >
            {{ session()->get('success_massage') }}
        </div>
    @endif

    @if(count($errors) >0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="container text-center py-5 mt-auto">
            <div class="row d-flex justify-content-center">
                    <div  class="view zoom z-depth-0 rounded">
                        <img style="height: 250px;width: 250px"
                             src="{{productImage($user->avatar)}}"
                             class="img-fluid rounded-pill">
                        <a>
                            <div class="mask"></div>
                        </a>

                        <br>
                        <div class="name">
                            <h2 class="title">{{ $user->name }}
                                <br>
                            </h2>
                            <h3 class="description">
                                {{ $user->email }}
                            </h3>
                        </div>
                    </div>
            </div>
            @if(auth()->user() && $user->id == auth()->user()->id)
                <br>
                <div class="row">
                    <div class=" ml-auto mr-auto text-center" >
                        <btn onclick="$('#profileCard').slideToggle(1000)" class="btn btn-primary">
                            <i class="fa fa-cog"></i> Update Profile</btn>
                    </div>
                </div>
                @include('frontend.pages.edit-profile')
            @endif

        </div>
</main>
<!-- Main layout -->

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

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>--}}
@include('sweet::alert')
</html>
