<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['quantity'];

    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }
}
