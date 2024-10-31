<?php
namespace App\Http\Controllers\SOLID\OpenClosePrinciple;
class ShippingService {
    private $shipping;
    public function __construct(ShippingMethod $shipping) {
        $this->shipping = $shipping;
    }
    public function calculate($weight) {
        return $this->shipping->calculateCost($weight);
    }

}
