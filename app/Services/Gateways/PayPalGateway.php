<?php

namespace App\Services\Gateways;

class PayPalGateway implements PaymentGatewayInterface
{
    public function charge(float $amount): array
    {
        // Giả lập xử lý thanh toán qua PayPal
        return [
            'status' => 'success',
            'message' => "Charged $amount USD via PayPal.",
        ];
    }
}
