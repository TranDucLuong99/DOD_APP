<?php

namespace App\Services;

use App\Services\Gateways\PaymentGatewayInterface;

class PaymentService
{
    protected $gateway;

    public function __construct(PaymentGatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount): array
    {
        return $this->gateway->charge($amount);
    }
}
