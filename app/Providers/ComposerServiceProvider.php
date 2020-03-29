<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\ViewComposers\AreaComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AreaComposer::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer('*', AreaComposer::class);
    }
}
