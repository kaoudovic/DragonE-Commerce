<div class="divider-new version-2 mt-5 mb-0">
    <h4 class="text-uppercase font-weight-bold deep-grey-text mr-3">Most Viewed</h4>
</div>
<!--Section: Block Content-->
<section class="text-center mb-5">


    <!-- Carousel Wrapper -->
    <div id="multi-item-example-recently_viewed" class="carousel slide carousel-multi-item" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            @for($i = 0;$i < count($recently_viewed);$i++)
                <li class="{{$i == 0 ? 'active' : ''}}" data-target="#multi-item-example-recently_viewed" data-slide-to="{{$i}}"></li>
            @endfor
        </ol>

        <!-- Indicators -->
        <!-- Slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            @foreach($recently_viewed as $recent)
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <div class="wrapper">
                        @foreach($recent as $product)
                            <div class="col-md-3 mb-3">
                                <!-- Card -->
                                <div class="">
                                    <div class="view zoom overlay z-depth-2 rounded">
                                        <img class="img-fluid w-100" style="height: 250px;"
                                             src="{{asset('Pictures_Project/'.$product['slug'].'.jpg')}}" alt="Sample">
                                        <h6 class="mb-0"><span class="badge badge-primary badge-pill badge-news">New</span></h6>
                                        @if(intval($product['discount']) > 0)
                                            <h6 class="mb-0"><span class="badge badge-danger badge-pill badge-news">-{{$product['discount']}}%</span></h6>
                                        @endif
                                        <a href="{{route('shop.show',['product' => $product['slug']])}}">
                                            <div class="mask">
                                                <img class="img-fluid w-100"
                                                     src="{{asset('Pictures_Project/'.$product['slug'].'.jpg')}}">
                                                <div class="mask rgba-black-slight"></div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="pt-4">

                                        <h5>{{$product['name']}}</h5>
                                        <p class="mb-2 text-muted text-uppercase small">{{$product['category'][0]['name'] ?? ''}}</p>
                                        <hr>

                                        @if(intval($product['discount']) > 0)
                                            <del><h6 class="mb-2"><span>{{$product['price']}}$</span></h6></del>
                                            <h6 class="mb-2"><span>{{$product['price']-( ($product['price'] * ($product['discount']/100)))}}$</span></h6>
                                        @else
                                            <h6 class="mb-2"><span>{{$product['price']}}$</span></h6>
                                        @endif

                                        <form action="{{route('cart.store')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="id" value="{{$product['id']}}">
                                            <input type="hidden" name="name" value="{{$product['name']}}">
                                            <input type="hidden" name="price" value="{{$product['price']}}">
                                            <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i
                                                    class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                                            @if(!empty(auth()->id()))
                                                <button type="button" onclick="add_to_Wishlist('{{$product['id']}}')" class="btn btn-danger btn-sm px-3 material-tooltip-main" data-toggle="tooltip"
                                                        data-placement="top" title="Add to wishlist"><i id="heart-{{$product['id']}}" class=" {{\App\Models\Product::isFav($product['id']) ? 'fa fa-heart' : 'far fa-heart'}}"></i></button>
                                            @endif
                                        </form>

                                    </div>

                                </div>
                                <!-- Card -->
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Slides -->
        <a class="carousel-control-prev left carousel-control" data-slide="prev" href="#multi-item-example-recently_viewed" role="button"
           data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next right carousel-control" data-slide="next" href="#multi-item-example-recently_viewed" role="button"
           data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span></a>
    </div>
    <!-- Carousel Wrapper -->

</section>
<!--Section: Block Content-->
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
                console.log(response);
                var fav = document.getElementById('heart-'+id);

                fav.setAttribute('class',response.class);
            }
        });
    }
</script>
