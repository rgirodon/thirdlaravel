<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Managers\NewsLetterSubscriptionManager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            'newsLetter',
            function($app) {
                return new NewsLetterSubscriptionManager();
            });
    }
}
