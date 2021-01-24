<div class="new_arrivals">
    <div class="container">
        <div class="row" >
            <div class="col">
                <div class="tabbed_container" >
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title" >Hot New Arrivals</div>
                        <ul class="clearfix">
                            @foreach($categories as $category)
                            <li class="{{$category->id == 1 ? 'active' : ''}}">{{ucfirst($category->name)}}</li>
                           @endforeach
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>
                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-lg-9" style="z-index:1;">

                            <!-- Product Panel -->
                            
                            <div  class="product_panel panel {{$category->id == 1 ? 'active' : ''}}">
                                <div  class="arrivals_slider slider">
                                    @foreach($newArrivals as $product)
                                    @if($product->cat_id!=$category->id)
                                        @continue
                                    @endif

                                    @include('frontend.products.new-arrivals.slider-item')
                                    
                                    @endforeach
                                    <!-- Slider Item -->
                                    
                                </div>
                           </div>
                        </div>  
                        @endforeach
                           
                    </div>
                </div>
            </div>
        </div>		
    </div>
</div>