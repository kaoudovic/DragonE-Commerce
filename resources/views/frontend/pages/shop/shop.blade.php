@include('frontend.pages.shop.head')

<main>

    <div class="container">

        <div class="row">

            @include('frontend.pages.shop.filters')

            <div class="col-md-9 mt-94">


                <!--Section: Block Content-->
                @include('frontend.pages.shop.sorting')
                <section>

                    <div id="products">
                        <!-- Grid row -->
                        @include('frontend.pages.shop.products')
                    </div>


                    <!-- Grid row -->
                    <div class="row justify-content-center mb-4">
                        <ul class="pagination pagination-circle pg-blue mb-0 ">
                            {{ $products->appends(request()->input())->links() }}
                        </ul>
                    </div>

                </section>
               <!--Section: Block Content-->

            </div>
        </div>

    </div>

</main>

@include('frontend.pages.shop.script')
