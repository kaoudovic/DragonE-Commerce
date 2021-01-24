<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\BackEnd\Product\Store;
use App\Http\Requests\BackEnd\Product\Update;
use App\Models\Product;

class ProductController extends BackEndController
{
    protected $model;
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
    protected function with()
    {
        
      return ['brand','category','color'];
    }
    

    public function store(Store $request){
        $exten = $request->file('image')->getClientOriginalExtension();
        $imageName = time().rand(100,1000).'.'.$exten;
        $request->file('image')->move(public_path('products\images'),$imageName);
        $array = $request->all();
        $array['image'] = $imageName;
        $array = array_merge($array,['remain' => $request->quantity]);
        $product = Product::create($array);
        $product->color()->sync($array['colors']);
        return redirect()->route('products.index')->with('message','Product added successfully');
        
    }
    public function update(Update $request, $id){
        $product = Product::findOrFail($id);
        $array = $request->all();
        if($request->has('image')){
            $exten = $request->file('image')->getClientOriginalExtension();
            $imageName = time().rand(100,1000).'.'.$exten;
            $directory = public_path('products\images');
            $request->file('image')->move($directory,$imageName);
            $array['image'] = $imageName;
        }
        $array = array_merge($array,['remain' => $request->quantity]);
        $product->update($array);
        $product->color()->sync($array['colors']);
        return redirect()->route('products.index')->with('message','Product updated successfully');
    }
}
