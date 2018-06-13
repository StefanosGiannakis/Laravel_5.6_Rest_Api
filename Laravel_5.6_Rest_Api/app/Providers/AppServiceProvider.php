<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // We are adding this to support the lineboot function
// If we don't want resource data wrapping
// use Illuminate\Http\Resources\Json\Resource;    
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); // We are adding this to solve the  " SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes ""
        // Resource::withoutWrapping(); // Resource without daata wrapping
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
