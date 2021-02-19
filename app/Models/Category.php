<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     public function product(){
         return $this->belongsToMany('App\Models\Product');
     }

    protected $guarded = [];

    protected $table = 'category';

    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
