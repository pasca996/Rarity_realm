<?php

namespace App\Providers;

use App\Http\Controllers\PriceController;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register(): void
    {
        // $this->app->singleton(PriceController::class, function ($app) {
        //     return new PriceController();
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('categories')) {
            View::share('categories', Category::all());
        }
    }
}
