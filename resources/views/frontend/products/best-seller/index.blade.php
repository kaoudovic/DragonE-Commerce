<div class="best_sellers">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="tabbed_container">
                    <div class="tabs clearfix tabs-right">
                        <div class="new_arrivals_title">Hot Best Sellers</div>
                        <ul class="clearfix">
                            <li class="active">Top 20</li>
                            <li>Audio & Video</li>
                            <li>Laptops & Computers</li>
                        </ul>
                        <div class="tabs_line"><span></span></div>
                    </div>

                    @include('frontend.products.best-seller.top-20')
                    @include('frontend.products.best-seller.phones')
                    @include('frontend.products.best-seller.laptops-and-cameras')
                    
                </div>

            </div>
        </div>
    </div>
</div>