<?php
namespace App\Http\Controllers\SOLID\OpenClosePrinciple;
interface ShippingMethod {
    public function calculateCost($weight);
}
