<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'billing_email', 'billing_fname', 'billing_lname', 'billing_address', 'billing_city',
        'billing_info', 'billing_postalcode', 'billing_phone', 'billing_name_on_card',
        'billing_discount', 'billing_discount_code', 'billing_subtotal', 'billing_tax', 'billing_total',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }
}
