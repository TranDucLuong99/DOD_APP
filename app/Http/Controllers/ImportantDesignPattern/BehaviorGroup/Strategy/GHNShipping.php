<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Strategy;

class GHNShipping implements ShippingStrategy {
    public function calculate($order) {
// Giả lập logic tính phí vận chuyển của GHN
        return 12000;
    }
}

