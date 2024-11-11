<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Strategy;

class ViettelPostShipping implements ShippingStrategy {
    public function calculate($order) {
// Giả lập logic tính phí vận chuyển của ViettelPost
        return 15000;
    }
}

