<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::if('admin', function () {            
            if (auth()->user() && auth()->user()->role==1) {
                return 1;
            }
            return 0;
        });
        Blade::if('user', function () {            
            if (auth()->user() && auth()->user()->role==2) {
                return 1;
            }
            return 0;
        });
    }
}
