@if(count($productsOnSale))

<div class="deals_featured" style="margin-top: -150px">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->
                @include('frontend.products.deals.weekly-deals')
                
                <!-- Featured -->
                @include('frontend.products.deals.featured')
                
            </div>
        </div>
    </div>
</div>
@endif