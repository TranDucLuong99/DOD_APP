<?php

namespace App\Providers;

use App\Services\Payment\PaymentGatewayInterface;
use App\Services\Payment\PayPalGateway;
use App\Services\Payment\StripeGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentGatewayInterface::class, function($app) {
            // Bạn có thể thay đổi cách chọn gateway, ví dụ dựa trên biến môi trường, tham số request, v.v.
            if (request('payment_method') == 'paypal') {
                return new PayPalGateway();
            }

            return new StripeGateway(); // Mặc định là Stripe
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
