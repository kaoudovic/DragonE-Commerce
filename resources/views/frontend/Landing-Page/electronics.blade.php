<div class="divider-new version-2 mt-5 mb-0">
    <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Electronics</h4>
</div>

<!-- Section electronics -->
<section class="py-2 my-4">

    <div class="row">
        <div class="col-3">

            <div class="view z-depth-2 rounded">
                <img class="img-fluid w-100" src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(4).jpg"
                     alt="Sample">
                <a href="{{route('shop.index')}}" class="text-white">
                    <div class="mask">
                        <div class="p-3">
                            <h5>Best trending and the newest electronics</h5>
                            <p>Alongside the international electronic marketplace, a global electronic dragon is waiting to be born as well.</p>
                            <button type="button" class="btn btn-outline-white btn-rounded waves-effect">Source now</button>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="col-9">

            <div class="card">
                <div class="card-body">

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                        @foreach($random_section as $product)
                            <div class="col mb-4 mb-xl-0 pb-2">
                                <div class="view zoom overlay">
                                    <p class="mt-0 small"><a style="text-overflow: ellipsis;overflow: hidden; white-space: nowrap;" href="{{route('shop.show',['product' => $product->slug])}}" class="text-reset stretched-link">{{$product->details}}</a></p>
                                    <img class="float-right" style="height: 90px;width: 90px"
                                         src="{{asset('Pictures_Project/'.$product['slug'].'.jpg')}}" alt="Sample"
                                         width="110">
                                    <p>{{$product['category'][0]['name'] ?? ''}}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
<!-- Section electronics -->
