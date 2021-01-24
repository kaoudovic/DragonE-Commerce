<div class="featured">
    <div class="tabbed_container">
        <h2 style="font-family: sans-serif" class="text-center">On Sale</h2><br>
        <div class="tabs">
            <ul class="clearfix">
               @foreach($categories as $category)
                <li class="{{$category->id == 1 ? 'active' : ''}}">{{ucfirst($category->name)}}</li>
               @endforeach
               
            </ul>
            <div class="tabs_line"><span></span></div>
        </div>

        @foreach($categories as $category)
            <div class="product_panel panel {{$category->id == 1 ? 'active' : ''}}">
                <div class="featured_slider slider">

                    @if(count($productsOnSale))
                        @foreach($productsOnSale as $product)
                           
                            @if($product->cat_id != $category->id)
                                 @continue
                            @endif
                               
                            @include('frontend.products.deals.slider-item')
                        @endforeach
                    @endif

                </div>
                <div class="featured_slider_dots_cover"></div>
            </div>
        @endforeach
    </div>
</div>