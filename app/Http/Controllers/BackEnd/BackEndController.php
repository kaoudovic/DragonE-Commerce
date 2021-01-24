<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class BackEndController extends Controller
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    protected function getClassNameFromModel(){
        return str::plural(strtolower(class_basename($this->model)));
        
    }
    protected function pluralModelName(){
        return str::plural(class_basename($this->model));
    }

    protected function ModelNameForParameter(){
        return strtolower(class_basename($this->model));
    }
    
    public function index()
    {
        $page_title = $this->pluralModelName().' control';
        $nav_title = $this->pluralModelName();

        $modelName = strtolower(class_basename($this->model));
        $routeName = $this->getClassNameFromModel();
        $parameter = $this->ModelNameForParameter();

        $rows = $this->model::orderBy('id','desc');
        $rows = productFilteration($rows);
        if(!empty($this->with())){
            $rows = $rows->with($this->with())->paginate(10);
        } else{
            $rows = $rows->paginate(10);
        }
        
        return view('backend.'.$routeName.'.index',compact(
            'page_title','nav_title','routeName','modelName','parameter','rows'
        ));
    }

    
    public function create()
    {
        $page_title = 'create '.strtolower(class_basename($this->model));
        $nav_title = $page_title;
        $routeName = $this->getClassNameFromModel();

        return view('backend.'.$routeName.'.create',compact(
            'page_title', 'nav_title','routeName'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $routeName = $this->getClassNameFromModel();
        $parameter = $this->ModelNameForParameter();

        $page_title = 'Edit '.class_basename($this->model);
        $nav_title = $page_title;
        $row = $this->model;

        if(!empty($this->with())){
            $row = $row->with($this->with())->findOrFail($id);;
        } else{
            $row = $row->findOrFail($id);
        }
        
        return view('backend.'.$routeName.'.edit', compact(
            'row','page_title', 'nav_title','parameter','routeName'));
    }

    
    public function destroy($id){
        $routeName = $this->getClassNameFromModel();
        $row = $this->model::findOrFail($id);
        $row->delete();
        return redirect()->route($routeName.'.index');
    }

    protected function with(){
        return [];
    }

}
