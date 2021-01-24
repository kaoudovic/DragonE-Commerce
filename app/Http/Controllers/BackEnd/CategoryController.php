<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\BackEnd\BackEndController;
use App\Http\Requests\BackEnd\Category\Store;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BackEndController
{
    protected $model;
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }


    public function update(Store $request, $id){
        $category = $this->model::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function store(Store $request){
        $category = $this->model::create($request->all());
        return redirect()->route('categories.index');
    }
}
