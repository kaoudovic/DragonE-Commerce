<div class="shop_sidebar">
    <div class="sidebar_section">
        <div class="sidebar_title">Categories</div>
        <ul class="sidebar_categories" id="cat">
            @foreach($categories as $category)
                <li><a href="{{route('shop.categories',['id' => $category])}}?key=cat_id#cat">{{$category->name}}</a></li>  
            @endforeach
        </ul>
    </div>
    <div class="sidebar_section filter_by_section">
        <div class="sidebar_title">Filter By</div>
        <div class="sidebar_subtitle">Price</div>
        <div class="filter_price">
            <div id="slider-range" class="slider_range"></div>
            <p>Range: </p>
            <p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
        </div>
    </div>
    <div class="sidebar_section">
        <div class="sidebar_subtitle brands_subtitle">Brands</div>
        <ul class="brands_list">
            @foreach($brands as $brand)
                <li class="brand"><a href="{{route('shop.brands',['id' => $brand])}}?key=brand_id#cat">{{$brand->name}}</a></li>
            @endforeach
        </ul>
    </div>
</div>