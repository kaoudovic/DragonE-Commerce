
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
                <h1 class="mb-0">Product page</h1>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Block Content-->
        <section class="mb-5">

            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">

                    <div id="mdb-lightbox-ui"></div>

                    <div class="mdb-lightbox">

                        <div class="row product-gallery mx-1">

                            <div class="col-12 mb-0">
                                <figure class="view overlay rounded z-depth-1 main-img" style="max-height: 450px;">
                                    <a  src="{{ asset('Pictures_Project/'.$product->slug.'.jpg')}}" data-size="710x823">
{{--                                        <img  src="{{ asset('Pictures_Project/'.$product->slug.'.jpg')}}"--}}
                                        <img  src="{{ asset('Pictures_Project/'.$product->slug.'.jpg')}}"
                                              class="img-fluid z-depth-1" style="margin-top: -30px;">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a  src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                        data-size="710x823">
                                        src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg.webp')}}"
                                        class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                                <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                                    <a hsrc="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                       data-size="710x823">
                                        <img src="{{asset
                                    ('Pictures_Project/phone/product/1.jpg')}}"
                                             class="img-fluid z-depth-1">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/5.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/4.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{asset
                                    ('Pictures_Project/phone/product/3.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                            <img src="{{ asset('Pictures_Project/'.$product->slug.'.jpg')}}"
                                                 class="img-fluid">
                                            <div class="mask rgba-white-slight"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <h5>{{$product->details }}</h5>
                    <p class="mb-2 text-muted text-uppercase small">{{$product->name}}</p>
                    <ul class="rating">
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-primary"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-primary"></i>
                        </li>
                    </ul>
                    <p><span class="mr-1"><strong>${{$product->price}} </strong></span></p>
                    <p class="pt-1"> {!! $product->description !!} </p>
                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                            <tbody>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Size: </strong></th>
                                <td>256GB</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Color</strong></th>
                                <td>Pacific Blue</td>
                            </tr>
                            <tr>
                                <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                <td>USA, Europe</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 pb-0 w-25">Quantity</td>
                                <td class="pb-0">Select size</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <div class="def-number-input number-input safari_only mb-0">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus"></button>
                                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                                        <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus"></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="small">128GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="medium">256GB</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary"
                                                   for="large">512GB</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <form action="{{route('cart.store')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value={{test_x($product->price)}}>
                        <a  href="{{route('checkout')}}">
                            <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
                        </a>
                        <button type="submit" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart
                        pr-2"></i>Add to
                            cart</button>
                    </form>
                </div>

            </div>

        </section>
        <!--Section: Block Content-->
        <hr>

        <!--Section: Block Content-->
        <section>

            <h3 class="text-center pt-5 mb-0">Our latest collection</h3>
            <!-- Grid row -->
            <div class="row mt-5 mb-4">

                <!-- Card -->
                @foreach($our_latest_collection as $product)
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="">

                            <div class="view zoom z-depth-2 rounded">
                                <img class="img-fluid w-100" style="max-height:280px" src="{{ asset('Pictures_Project/'.$product->slug.'.jpg')}}"alt="Sample">
                                <a href="{{route('shop.show',$product->slug)}}">
                                    <div class="mask waves-effect waves-light"></div>
                                </a>
                            </div>

                            <div class="text-center pt-4">
                               <a href="{{route('shop.show',$product->slug)}}" >
                                <h5>{{$product->name}}</h5>
                                <h6 class="mb-3">$ {{$product->price}}</h6>
                               </a>

                                <form action="{{route('cart.store')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="price" value=10.00>
                                    <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                    <a href="{{url('/wishlist/')}}">
                                        <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main" data-toggle="tooltip"
                                                data-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                    </a>
                                </form>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <!-- Grid row -->




        </section>        <!--Section: Block Content-->

    </div>
</main>
<!--Main layout-->



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
<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>
</body>

</html>
