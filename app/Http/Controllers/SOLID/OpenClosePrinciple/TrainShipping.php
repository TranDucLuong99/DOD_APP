<?php
namespace App\Http\Controllers\SOLID\OpenClosePrinciple;

class TrainShipping implements ShippingMethod {
    public function calculateCost($weight) {
        return $weight * 1.2;
    }
}
