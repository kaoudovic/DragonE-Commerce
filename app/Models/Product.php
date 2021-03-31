<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $fillable = ['quantity'];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
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

    public function isFav($product_id)
    {

        $wish = Wishlist::where('user_id',auth()->id())->where('product_id',$product_id)->first();
        if(!empty($wish))
            return true;

        return false;
    }


}
