<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
//se hizo un llamado a los estilos de bootstrap y usando modelo del paginador le da vida a la paginacion 
        Paginator::useBootstrap();
    }
}
