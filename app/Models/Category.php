<?php

namespace App\Models;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Searchable;

//     public function product(){
//         return $this->belongsToMany('App\Models\Product');
//     }

    protected $guarded = [];

    protected $table = 'category';

    public function products()
    {
        return $this->belongsToMany(Product::class,'category_product');
    }
}
