<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        # Use GraphQl
        $this->app->bind(
            'App\Http\Interfaces\RiskApiRepositoryInterface',
            'App\Http\Repository\GraphQlRiskClientRepository'
        );

        # Use Log
        $this->app->bind(
            'App\Http\Interfaces\LogInterface',
            'App\Http\Classes\Log\RiskLogFus'
        );

        # Send Mail
        $this->app->bind(
            'App\Http\Interfaces\MensagemInterface',
            'App\Http\Classes\Sms'
        );
    }
}
