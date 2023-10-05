<?php

namespace App\Providers;

//Agregando
use Illuminate\Pagination\Paginator as PaginationPaginator;


use Illuminate\Support\ServiceProvider;

//Agregando
use Illuminate\Support\Facades\Schema;  
use Illuminate\Pagination\Paginator;

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
        //Agregando
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
