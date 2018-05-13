<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontend.menu',function($view){
          $category= Category::where('publication_status',1)->get();
          $view->with('category',$category);
        });
        
        //View::composer('frontend.main_content', function($view){
            //$products= Product::where('publication_status',1)->get();
            //$view->with('products',$products);
        //});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
