<?php

declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Services\ProductService\ProductServiceInterface;
use App\Services\ProductService\ProductService;
use App\Contracts\Services\CategoryService\CategoryServiceInterface;
use App\Services\CategoryService\CategoryService;

use App\Contracts\Services\BasketService\BasketServiceInterface;
use App\Services\BasketService\BasketService;


use Illuminate\Support\ServiceProvider;


class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(
            ProductServiceInterface::class,
            ProductService::class,
           
        );
        $this->app->bind(
            CategoryServiceInterface::class,
            CategoryService::class
           
        );
        $this->app->bind(
            BasketServiceInterface::class,
            BasketService::class
           
        );
        


    }
}