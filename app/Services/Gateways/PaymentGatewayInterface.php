<?php

namespace App\Services\Gateways;

interface PaymentGatewayInterface
{
    public function charge(float $amount): array;
}
