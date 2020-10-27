<?php

namespace Armincms\Cashier;
 
use Illuminate\Support\ServiceProvider; 
use Illuminate\Contracts\Support\DeferrableProvider;

class CashierServiceProvider extends ServiceProvider implements DeferrableProvider
{ 
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cashier', function($app) {
            return new Cashier($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'cashier'
        ];
    }
}
