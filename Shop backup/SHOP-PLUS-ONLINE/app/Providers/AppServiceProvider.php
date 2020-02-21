<?php

namespace App\Providers;

use App\Http\Repositories\Categories\CategoryRepo;
use App\Http\Repositories\Categories\CategoryRepoInterface;
use App\Http\Repositories\Products\ProductRepo;
use App\Http\Repositories\Products\ProductRepoInterface;
use App\Http\Services\Categories\CategoryService;
use App\Http\Services\Categories\CategoryServiceInterface;
use App\Http\Services\Products\ProductService;
use App\Http\Services\Products\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->singleton(CategoryRepoInterface::class, CategoryRepo::class);
        $this->app->singleton(CategoryServiceInterface::class, CategoryService::class);

        $this->app->singleton(ProductRepoInterface::class, ProductRepo::class);
        $this->app->singleton(ProductServiceInterface::class, ProductService::class);
    }
}
