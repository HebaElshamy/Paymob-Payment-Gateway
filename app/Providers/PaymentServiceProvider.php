<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PaymentGatewayInterface;
use App\Services\PaymobPaymentService;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(PaymentGatewayInterface::class, PaymobPaymentService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
