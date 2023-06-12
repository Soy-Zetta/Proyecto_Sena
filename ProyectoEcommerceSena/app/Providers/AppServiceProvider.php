<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> badfdc2b0a37cdcfcbe675247302dc040a44b054

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
        Schema::defaultStringLength(191);

        // Habilitar timestamps en todos los modelos
        Model::unguard();
        Model::reguard();
    
<<<<<<< HEAD
=======
        Paginator::useBootstrap();
>>>>>>> badfdc2b0a37cdcfcbe675247302dc040a44b054
    }
}
