<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodect extends Model
{
    public function presetPrice(){

        return money_format('$%i',$this->price/100);
    }

}
