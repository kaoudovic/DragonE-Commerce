<div class="shop_content">
    

    @include('frontend.pages.shop.shop-bar')
    
    <div class="product_grid">
        <div class="product_grid_border"></div>
        
        @foreach($products as $product)
        <a href="{{route('product.show',['id' => $product])}}">
            <div class="product_item is_new">
                <div class="product_border"></div>
                <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset('assets/images/'.$product->image)}}" style="border-radius: 10px" width="160" height="160" alt=""></div>
                <div class="product_content">
                    <div class="product_price">${{$product->price}}<div style="font-size: 12px">{{$product->brand->name}}</div></div>
                    <div class="product_name"><div><a href="#" tabindex="0"></a>{{$product->name}}</div></div>
                </div>
                
                <ul class="product_marks">
                    
                    @if($product->discount > 0)
                        <li class="product_mark product_new">-25%</li>
                    @elseif(checkIfNew($product->created_at))
                        <li class="product_mark product_new">new</li>
                    @endif
                </ul>
            </div>
        </a>
        @endforeach
        
    </div>

    <!-- Shop Page Navigation -->
    <br> <br> <br>
    <div class="container">
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm">
            {{$products->links()}}
          </div>
          <div class="col-sm"> </div>
        </div>
      </div>

</div>