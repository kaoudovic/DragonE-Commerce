<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use Searchable;

    protected $fillable = ['quantity'];

    protected $searchable = [

        'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'category_product');
    }

    //for instant searching with algolia
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $extraFields = [
            'categories' => $this->categories->pluck('name')->toArray(),
        ];

        return array_merge($array, $extraFields);
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }

    public function options()
    {
        return $this->belongsToMany('App\Models\Option');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public  static function isFav($product_id)
    {

        $wish = Wishlist::where('user_id',auth()->id())->where('product_id',$product_id)->first();
        if(!empty($wish))
            return true;

        return false;
    }

    public static function getDiscount($id)
    {
        $product = Product::findOrFail($id);
        return $product->discount ?? 0;
    }


}
