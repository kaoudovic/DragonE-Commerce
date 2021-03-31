
<!DOCTYPE html>
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
                <h1 class="mb-0">Shopping cart</h1>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
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
        <section class="mt-5 mb-4">

            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                @if(Cart::count()>0 )

                <div class="col-lg-8">
                    <!-- Card -->
                    <!-- Card -->
                    <div class="card wish-list mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">{{ Cart::count()}} item(s) in the shopping cart</h5>

                            @foreach(Cart::content() as $item)

                                <div class="row mb-4" >
                                <div class="col-md-5 col-lg-3 col-xl-3">
                                    <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                        <img class="img-fluid w-100 "
                                             src="{{ productImage($item->model->image) }}" alt="Sample">
                                        <a href="{{route('shop.show',$item->model->slug)}}">
                                            <div class="mask waves-effect waves-light">
                                                <img class="img-fluid w-100"
                                                     src="{{ productImage($item->model->image) }}">
                                                <div class="mask rgba-black-slight waves-effect waves-light"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-lg-9 col-xl-9">
                                    <div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>{{$item->model->name}}</h5>
                                                <p class="mb-3 text-muted text-uppercase small">{{$item->model->details}}</p>
                                            </div>
{{--                                            <div>--}}
{{--                                                <div class="def-number-input number-input safari_only mb-0 w-100">--}}
{{--                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"--}}
{{--                                                            class="minus" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}"></button>--}}
{{--                                                    <input class="quantity" min="0" name="quantity" value="1"--}}
{{--                                                           type="number">--}}
{{--                                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"--}}
{{--                                                            class="plus" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}"></button>--}}
{{--                                                </div>--}}
{{--                                                <small id="passwordHelpBlock" class="form-text text-muted text-center">--}}
{{--                                                    (Note, 1 piece)--}}
{{--                                                </small>--}}
{{--                                            </div>--}}
                                            <div>
                                                <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                                    @for ($i = 1; $i < 5 + 1 ; $i++)
                                                        <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mr-3">
                                                <form method="post" action="{{route('cart.destroy' ,$item->rowId)}}">
                                                    {{csrf_field()}}
                                                    {{method_field('DELETE')}}
                                                    <button type="submit" class="btn btn-flat btn-md text-uppercase">
                                                        <i class="fas fa-trash-alt mr-1"></i> &nbsp; Remove item
                                                    </button>
                                                </form>


                                                @if(!empty(@auth()->id()))
                                                    <button type="button" onclick="add_to_Wishlist('{{$item->id}}')" class="btn btn-flat btn-md text-uppercase">
                                                        <i id="heart-{{$item->id}}" class="{{(\App\Models\Product::find($item->id))->isFav($item->id) ? 'fa fa-heart' : 'far fa-heart'}} mr-1"></i> &nbsp; Move to wish list
                                                    </button>
                                                @endif

                                            </div>
                                            <p
                                                class="mb-0"><span><strong>${{test_x($item->model->price)
                                                }}</strong></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">

                            @endforeach
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

                                <a  href="{{route('checkout.stripe',Cart::total(2,'.',','))}}" class=" btn btn-primary btn-block
                            waves-effect
                            waves-light">
                                    Proceed to checkout
                                </a>
                            </div>
                        </div>
                        <!-- Card -->

                        <!--Grid column-->

                    </div>

                    <!--Grid column-->
                @else
                    <div>
                        <h3>No items in Cart!</h3><br>
                        <a href="{{ route('shop.index') }}" class="btn btn-primary btn-sm">Continue Shopping</a>
                    </div>
                @endif
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




</body>

</html>
