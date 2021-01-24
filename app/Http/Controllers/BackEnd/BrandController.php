<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\BackEnd\Brand\Store;
use App\Models\Brand;

class BrandController extends BackEndController
{
    protected $model;

    public function __construct(Brand $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request){
        Brand::create($request->all());
        return redirect()->route('brands.index')->with('message','Brand added');
    }

    public function update(Store $request,$id){
        $brand = $this->model::findOrFail($id);
        $brand->update($request->all());
        return redirect()->route('brands.index')->with('message','Brand updated');
    }
}
