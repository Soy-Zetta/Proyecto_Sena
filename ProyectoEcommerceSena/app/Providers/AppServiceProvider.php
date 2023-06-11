<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Pagination\Paginator;
>>>>>>> 991155c35b4784bacbe55aac2b6d045ff596b0c4

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
<<<<<<< HEAD
        Schema::defaultStringLength(191);

        // Habilitar timestamps en todos los modelos
        Model::unguard();
        Model::reguard();
    
=======
        Paginator::useBootstrap();
>>>>>>> 991155c35b4784bacbe55aac2b6d045ff596b0c4
    }
}
