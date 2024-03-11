<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Category\CategoryRepository', 'App\Repositories\Category\CategoryEloquent');
        $this->app->bind('App\Repositories\Product\ProductRepository', 'App\Repositories\Product\ProductEloquent');
        $this->app->bind('App\Repositories\SubCategory\SubCategoryRepository', 'App\Repositories\SubCategory\SubCategoryEloquent');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
