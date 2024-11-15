<?php

namespace App\Services\Gateways;

class StripeGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): array
    {
        // Giả lập xử lý thanh toán qua Stripe
        return [
            'status' => 'success',
            'message' => "Charged $amount USD via Stripe.",
        ];
    }
}
