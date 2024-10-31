<?php
namespace App\Http\Controllers\SOLID\OpenClosePrinciple;

class TruckShipping implements ShippingMethod {
    public function calculateCost($weight) {
        return $weight * 1.5;
    }
}
