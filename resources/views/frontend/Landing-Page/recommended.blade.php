<div class="divider-new version-2 mt-5 mb-0">
    <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Recommended items</h4>
</div>

<!-- Section recommended -->
<section class="py-2 mt-4">

    <div class="row row-cols-1 row-cols-md-3 row-cols-xl-6">

        @foreach($recommended_products as $product)
            <div class="col mb-4">

            <!-- Card -->
            <div class="card">

                <div class="view zoom overlay">
                    <img class="img-fluid w-100" style="height: 150px;width: 150px"
                         src="{{asset('Pictures_Project/'.$product['slug'].'.jpg')}}" alt="Sample">
                    <a href="{{route('shop.show',['product' => $product->slug])}}">
                        <div class="mask">

                        </div>
                    </a>
                </div>

                <div class="card-body text-center">

                    <h5>{{$product->name}}</h5>
                    <h6 class="mb-0"><span>${{$product->price}}</span></h6>
                </div>

            </div>
            <!-- Card -->

        </div>
        @endforeach

    </div>

</section>
<!-- Section recommended -->
