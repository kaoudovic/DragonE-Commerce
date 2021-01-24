<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id','product_id','color_id','quantity'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function color(){
        return $this->belongsTo(Color::class,'color_id');
    }

    public function getRouteKeyName()
    {
        return 'user';
    }
  
}
