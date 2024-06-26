<?php

namespace App\Providers;

use App\Services\Interfaces\OrderInterface;
use App\Services\Interfaces\ProductInterface;
use App\Services\Services\OrderService;
use App\Services\Services\ProductService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->bind(ProductInterface::class,ProductService::class);
        $this->app->bind('ProductService',function(){
            return new ProductService();
        });
        $this->app->bind(OrderInterface::class,OrderService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
