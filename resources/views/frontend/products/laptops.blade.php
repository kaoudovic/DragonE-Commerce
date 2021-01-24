<div class="product_panel panel">
    <div class="arrivals_slider slider">

        @foreach($newLaptops as $laptop)
        <a href="{{route('product.show',['id' => $laptop])}}">
            <div class="arrivals_slider_item">
                <div class="border_active"></div>
                <div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('/assets/images/'.$laptop->image)}}" alt=""></div>
                    <div class="product_content">
                        <div class="product_price">${{$laptop->price}}</div>
                        <div class="product_name"><div><a href="product.html">{{$laptop->name}}</a></div></div>
                        <div class="product_extras">
                            <div class="product_color">
                                @foreach($colors as $color)
                                    <input type="radio" checked name="product_color" style="background:{{$color->color}}">
                                @endforeach
                            </div>
                            <button class="product_cart_button">Add to Cart</button>
                        </div>
                    </div>
                    <div class="product_fav"><i class="fas fa-heart"></i></div>
                    <ul class="product_marks">
                        <li class="product_mark product_new">new</li>
                    </ul>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="arrivals_slider_dots_cover"></div>
</div>