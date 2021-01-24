<a href="{{route('product.show',['id' => $product])}}">
    <div class="featured_slider_item">
        <div class="border_active"></div>
        <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
            <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('products/images/'.$product->image)}}" alt="" style="border-radius: 10px" width="170" height="160"></div>
            <div class="product_content">
                @if($product->discount == 0)
                    <div class="product_price">${{$product->price}}</div>
                @else
                <div class="product_price"><del>${{$product->price}}</del> <br>${{clcDiscount($product->price,$product->discount)}}</div>
                @endif
                <div class="product_name"><div><a href="{{route('product.show',['id' => $product])}}">{{$product->name}}</a></div></div>
                <form action="{{route('cart.create')}}" method="post">
                    {{ csrf_field() }}
                    <div class="product_extras">
                        <div class="product_color" style="margin-bottom: 10px">
                     
                        @foreach($product->color as $color)
                            <input type="radio" value="{{$color->id}}" name="product_color" style="background:{{$color->color}}">
                        @endforeach
                        </div>
                        @if(auth()->user())
                            <button type="submit" class="product_cart_button">Add to Cart</button>
                        @else
                        <a href="{{route('register')}}" class="btn btn-primary">Register for Shopping</a>
                        @endif
                    </div>
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                </form>
            
            </div>
            <div class="product_fav"><i class="fas fa-heart"></i></div>
            <ul class="product_marks">
                <li class="product_mark product_new">-{{$product->discount}}%</li>
            </ul>
        </div>
    </div>
</a>