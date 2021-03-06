<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function product(){
        return $this->belongsToMany('App\Product');
    }

    protected $guarded = [];

    protected $table = 'category';

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
