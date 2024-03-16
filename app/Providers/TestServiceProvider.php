<?php

namespace App\Providers;
use App\Services\UserService;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        app()->bind('hello',function(){
            return "Hello";
        });
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
