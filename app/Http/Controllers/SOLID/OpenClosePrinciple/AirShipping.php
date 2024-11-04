<?php

namespace App\Http\Controllers\SOLID\OpenClosePrinciple;

class AirShipping implements ShippingMethod
{
    public function calculateCost($weight) {
        return $weight * 2;
    }
}
