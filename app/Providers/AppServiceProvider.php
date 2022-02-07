<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Composers\BreadcrumbComposer;
use Illuminate\Support\Facades\Schema; 

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
        View::composer('*', BreadcrumbComposer::class);
        Schema::defaultStringLength(191);
    }
}
