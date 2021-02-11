
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
                @if(\Gloudemans\Shoppingcart\Facades\Cart::count()>0 )

                    <div class="col-lg-8">
                        <!-- Card -->
                        <!-- Card -->
                        <div class="card wish-list mb-4">
                            <div class="card-body">

                                <h5 class="mb-4">{{ \Gloudemans\Shoppingcart\Facades\Cart::count()}} item(s) in the
                                    shopping cart</h5>
                                <br>
                                @foreach (\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
                                    <div class="cart-table-row">
                                        <div class="cart-table-row-left">
                                            <a href="{{ route('shop.show', $item->model->slug) }}">
                                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" alt="item" class="cart-table-img"></a>
                                            <div class="cart-item-details">
                                                <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                                                <div class="cart-table-description">{{ $item->model->details }}</div>
                                            </div>
                                        </div>
                                        <div class="cart-table-row-right">
                                            <div class="cart-table-actions">
                                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" class="cart-options">Remove</button>
                                                </form>
                                            </div>
                                            <div>
                                                <select class="quantity" data-id="{{ $item->rowId }}"
                                                        data-productQuantity="{{$item->model->quantity}}">
                                                    @for ($i = 1; $i < 5 + 1 ; $i++)
                                                        <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div>{{$item->model->price}}</div>
                                        </div>
                                    </div> <!-- end cart-table-row -->
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
                                <a  href="{{route('checkout')}}" class=" btn btn-primary btn-block waves-effect waves-light">
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
