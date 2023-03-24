<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        
        View::composer(['*'], function($view){
            $navs = Category::with('subcategories')->get();
            $view->with('navs', $navs);
        });
    }
}
