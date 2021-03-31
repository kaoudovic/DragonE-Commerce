
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

<!-- Main Navigation -->
<header>
@include('layouts.header')
    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center">
            <div class="container text-center py-3">
                <h1 class="mb-0">Wishlist</h1>
            </div>
        </div>
    </div>

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>
    <div class="container">

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
        <!--Section: Block Content-->
        <section>

            <!-- Grid row -->
            <div class="row">
                @if(count($products))

                    @foreach($products as $product)
                        <div id="wishlist-{{$product->id}}" class="col-md-4 mb-5">
                    <!-- Card -->

                        <div class="view zoom overlay z-depth-2 rounded" style="height: 250px">
                            <img class="img-fluid w-100"
                                 src="{{ productImage($product->image) }}">
                            <a href="{{route('shop.show',$product->slug)}}">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="{{ productImage($product->image) }}">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>{{$product->name}}</h5>
                            <p style="text-overflow: ellipsis;overflow: hidden; white-space: nowrap;" class="mb-2 text-muted text-uppercase small">{{$product->description}}</p>
                            <hr>
                            <h6 class="mb-3">${{ test_x($product->price)}}</h6>

                            <div class="mr-3">
                               <div>
                                <form action="{{route('cart.store')}}" method="POST" >
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="price" value=10.00>
                                    <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                    <button type="button" class="btn btn-light btn-sm mr-1  "><i
                                            class="fas fa-info-circle pr-2"></i><a href="{{route('shop.show',$product->slug)
                                    }}">Details</a></button>
                                    <button type="button" onclick="remove_from_Wishlist('{{$product->id}}')" class="btn btn-danger btn-sm mr-1 waves-effect waves-light"><i
                                            class="fas fa-trash"></i></button>

                                </form>
                               </div>
                            </div>

                        </div>
                    <!-- Card -->
                </div>

                    @endforeach

                    @else
                        <div>
                            <h3> You have No items moved in wishlist yet!</h3><br>
                            <a href="{{ route('shop.index') }}" class="btn btn-primary btn-sm">Continue Shopping</a>
                        </div>
                    @endif
            </div>
            <!-- Grid row -->

        </section>
        <!--Section: Block Content-->

    </div>
</main>
<!-- Main layout -->

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


    function add_to_Wishlist(id)
    {

        $.ajax({
            url: '/wishlist/moveToWishlist/'+id,
            type:"POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){
                var fav = document.getElementById('heart-'+id);
                fav.setAttribute('class',response.class);
            }
        });
    }

</script>


<script>
    $(function () {
        $('.material-tooltip-main').tooltip({
            template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
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

    function remove_from_Wishlist(id)
    {
        $.ajax({

            url: '/wishlist/deleteFromWishlist/'+id,
            type:"POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(response){

                var div = document.getElementById('wishlist-'+id);
                div.remove();
            }
        });
    }

</script>
</body>

</html>
