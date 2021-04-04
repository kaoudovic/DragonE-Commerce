@include('frontend.Landing-Page.head')
<main>

    <div class="container-xl">

        <!-- Section main -->
        <section class="pt-2 mt-4">

            <div class="card">
                <div class="card-body">

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-2">
                            <h6>MY Categories</h6>
                            <ul class="list-group list-group-flush">
                                  @foreach($categories as $category)
                                   <li class="list-group-item pl-0">
                                    <a class="text-grey-dark"
                                    href="/shop?category={{$category->slug}}">{{$category->name}}</a>
                                    </li>
                                  @endforeach
                            </ul>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-8 col-lg-6 col-xl-7">

                            <!--Carousel Wrapper-->
                            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                                </ol>
                                <!--/Indicators-->
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(3).jpg"
                                                 alt="First slide">
                                            <a href="/shop?category=laptops">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Laptops</h3>
                                                <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(2).jpg"
                                                 alt="Second slide">
                                            <a href="/shop?category=laptops">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h4 class="h3-responsive">Mac-Book Pro</h4>
                                                <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(1).jpg"
                                                 alt="Third slide">
                                            <a href="/shop?category=mobile-phones">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">Iphone</h3>
                                                <p></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <!--Mask color-->
                                        <div class="view" style="max-height: 418px;">
                                            <img class="d-block" src="https://souqcms.s3-eu-west-1.amazonaws.com/cms/boxes/img/desktop/L_1616665702_GW-MB-PS5-en.jpg"
                                                 alt="Third slide">
                                            <a href="/shop?category=video-game">
                                                <div class="mask rgba-black-light"></div>
                                            </a>
                                        </div>
                                        <div class="carousel-caption">
                                            <h3 class="h3-responsive">PlayStation^5</h3>
                                                <p></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/Controls-->
                            </div>
                            <!--/Carousel Wrapper-->

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-3 d-none d-lg-block">

                            <h6 class="indigo text-white text-center py-2 mb-4">Popular category</h6>
                            @foreach($popular_categories as $category)
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-grey-dark mb-2"><strong>{{$category['name']}}</strong></p>
                                        <a href="/shop?category={{$category['slug']}}" type="button" class="btn btn-indigo p-2">Source now</a>
                                    </div>
                                    <img class="d-flex ml-3"
                                         src="{{productImage($category['main_img'])}}"
                                         alt="category_main_img" width="100">
                                </div>
                                @if(!$loop->last)
                                    <hr>
                                @endif
                            @endforeach

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </div>
            </div>

        </section>

        @include('frontend.Landing-Page.deals')
        @include('frontend.Landing-Page.new-arrivals')
        @include('frontend.Landing-Page.best-seller')

        @if(count($recently_viewed))
            @include('frontend.Landing-Page.most-viewed')
        @endif
        <!-- Section main -->



        @include('frontend.Landing-Page.electronics')
        @include('frontend.Landing-Page.monthly-products')


        @include('frontend.Landing-Page.recommended')

        <div class="divider-new version-2 mt-4 mb-0">
            <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Trade services</h4>
        </div>

        <!-- Section services -->
        <section class="py-2 my-4">

            <div class="row">

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(10).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(7).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(8).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

                <div class="col-md-6 col-xl-3 mb-4">

                    <!-- Card -->
                    <div class="card">

                        <div class="view overlay">
                            <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(9).jpg"
                                 alt="Sample">
                            <a href="#!" class="">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <div class="card-body">

                            <h5>Trade Assurance</h5>
                            <p class="small text-uppercase text-muted mb-0">ORDER PROTECTION</p>

                        </div>

                    </div>
                    <!-- Card -->

                </div>

            </div>

        </section>

    </div>

</main>
@include('sweet::alert')

@include('layouts.footer')

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
