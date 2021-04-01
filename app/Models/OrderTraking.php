<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTraking extends Model
{
    protected $fillable = [
        'order_id', 'billing_email'
    ];
}

