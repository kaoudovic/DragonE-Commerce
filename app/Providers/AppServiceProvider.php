<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength('191');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        view()->share('categories',Category::all());
//        view()->share('brands',Brand::all());
//        view()->share('allColors',Color::all());
    }
}
