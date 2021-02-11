<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    protected $fillable = ['quantity'];

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }
}
