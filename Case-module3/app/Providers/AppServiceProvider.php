<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\ProductLine;
use Gloudemans\Shoppingcart\Facades\Cart;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function ($view){
            $view->with([
                'productlines' => ProductLine::orderBy('id')->get(),
                'count' => Cart::count(),
            ]);
        });
    }
}
