<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description','price','discount','cat_id','quantity','brand_id','image','remain'];

    public function color(){
        return $this->belongsToMany(Color::class,'Productcolor','product_id','color_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
