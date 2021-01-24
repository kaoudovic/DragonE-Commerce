<?php

use App\Models\Product;

function productFilteration($items){
    if(request()->has('category')&&request()->get('category')!=''){
        
        $items->where('cat_id',request()->get('category'));
    }
    if(request()->has('brand')&&request()->get('brand')!=''){
        $items->where('brand_id',request()->get('brand'));
    }
    return $items;
}
