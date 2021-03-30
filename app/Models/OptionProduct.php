<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionProduct extends Model
{
    protected $table = 'option_product';

    protected $fillable = ['product_id', 'option_id'];
}

