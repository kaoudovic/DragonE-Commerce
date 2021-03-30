<div class="row mb-4">

    @foreach($products as $product)
        <div class="col-md-6 col-lg-4 mb-4">

            <!-- Card -->
            <div class="">

                <div class="view zoom z-depth-2 rounded">
                    <img class="img-fluid w-100" style="height: 250px" src="{{ asset
                                        ('Pictures_Project/'
                                        .$product->slug.'.jpg')}}"
                         alt="Sample">
                    <a href="{{route('shop.show',$product->slug)}}">
                        <div class="mask"></div>
                    </a>
                </div>

                <div class="text-center pt-4">
                    <a  href="{{route('shop.show',$product->slug)}}">
                        <h5>{{$product->name}}</h5>
                        <h6 class="mb-3">${{test_x($product->price)}}</h6>
                    </a>
                    <form action="{{route('cart.store')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                        <a href="{{url('/wishlist/')}}">
                            <button type="button" class="btn btn-danger btn-sm px-3 material-tooltip-main" data-toggle="tooltip"
                                    data-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                        </a>

                    </form>

                </div>

            </div>

            <!-- Card -->

        </div>

    @endforeach

</div>
