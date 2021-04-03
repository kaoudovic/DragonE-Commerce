<div class="row mb-4">

    @foreach($products as $product)
        <div class="col-md-6 col-lg-4 mb-4">

            <!-- Card -->
            <div class="">

                <div class="view zoom z-depth-2 rounded">
                    <img class="img-fluid w-100" style="height: 250px" src="{{ productImage($product->image) }}"
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
                        @if(!empty(auth()->id()))
                            <button type="button" onclick="add_to_Wishlist('{{$product->id}}')" class="btn btn-danger btn-sm px-3 material-tooltip-main" data-toggle="tooltip"
                                 data-placement="top" title="Add to wishlist"><i id="heart-{{$product->id}}" class=" {{$product->isFav($product->id) ? 'fa fa-heart' : 'far fa-heart'}}"></i></button>
                        @endif
                    </form>

                </div>

            </div>

            <!-- Card -->
        </div>

    @endforeach

</div>

<script>


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
