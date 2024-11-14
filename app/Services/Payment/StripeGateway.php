<?php

namespace App\Services\Payment;

class StripeGateway implements PaymentGatewayInterface
{
    public function charge($amount)
    {
        // Xử lý thanh toán qua Stripe
    }
}
