
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

    </style>
</head>

<body class="skin-light">

<!-- Main Navigation -->
<header>
@include('layouts.header')

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
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
{{--            @if(Cart::count()>0 )--}}
                @if(Cart::instance('moveToWishlist')->count() > 0)

                <!-- Grid column -->
                    @foreach(Cart::instance('moveToWishlist')->content() as $item)

                    <div class="col-md-4 mb-5">
                    <!-- Card -->
                    <div class="">

                        <div class="view zoom overlay z-depth-2 rounded">
                            <img class="img-fluid w-100"
                                 src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(1).jpg">
                            <a href="{{route('shop.show',$item->model->slug)}}">
                                <div class="mask">
                                    <img class="img-fluid w-100"
                                         src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(1).jpg">
                                    <div class="mask rgba-black-slight"></div>
                                </div>
                            </a>
                        </div>

                        <div class="text-center pt-4">

                            <h5>{{$item->model->name}}</h5>
                            <p class="mb-2 text-muted text-uppercase small">{{$item->model->details}}</p>
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
                                    <i class="fas fa-star fa-sm text-primary"></i>
                                </li>
                            </ul>
                            <hr>
                            <h6 class="mb-3">${{test_x($item->model->price)}}</h6>

                            <div class="mr-3">
                               <div>
                                <form action="{{route('cart.store')}}" method="POST" >
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$item->model->id}}">
                                    <input type="hidden" name="name" value="{{$item->model->name}}">
                                    <input type="hidden" name="price" value=10.00>
                                    <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                    <button type="button" class="btn btn-light btn-sm mr-1  "><i
                                            class="fas fa-info-circle pr-2"></i><a href="{{route('shop.show',$item->model->slug)
                                    }}">Details</a></button>
                                </form>

                                <form method="post" action="{{route('wishlist.destroy' ,$item->rowId)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button  style="margin-right:-300px;margin-bottom:-10px "type="submit"
                                              class="btn btn-elegant btn-sm px-3 mb-2 material-tooltip-main"
                                            data-toggle="tooltip" data-placement="top" title="Remove from wishlist"><i
                                            class="fas fa-times"></i></button>
                                </form>
                               </div>
                            </div>

                        </div>

                    </div>
                    <!-- Card -->
                </div>
                <!-- Grid column -->
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
</script>
</body>

</html>
