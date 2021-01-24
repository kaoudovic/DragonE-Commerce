<div class="banner_2">
    <div class="banner_2_background" style="background-image:url({{asset('assets/images/banner_2_background.jpg')}})"></div>
    <div class="banner_2_container">
        <div class="banner_2_dots"></div>
        <!-- Banner 2 Slider -->

        <div class="owl-carousel owl-theme banner_2_slider">

            <!-- Banner 2 Slider Item -->
            @foreach($laptopsForBanner as $laptop)
            <div class="owl-item">
                <div class="banner_2_item">
                    <div class="container fill_height">
                        <div class="row fill_height">
                            <div class="col-lg-4 col-md-6 fill_height">
                                <div class="banner_2_content">
                                    <div class="banner_2_category">Lap</div>
                                    <div class="banner_2_title">{{$laptop->name}}</div>
                                    <div class="banner_2_text">{{$laptop->description}}</div>
                                    <div class="button banner_2_button"><a href="{{route('product.show',['id' => $laptop])}}">Explore</a></div>
                                </div>

                            </div>
                            <div class="col-lg-8 col-md-6 fill_height">
                                <div class="banner_2_image_container">
                                    <div class="banner_2_image"><img src="{{asset('/assets/images/banner_2_product.png')}}" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>