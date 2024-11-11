<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Strategy;
// Định nghĩa Strategy Shipping (Chiến lược vận chuyển)
interface ShippingStrategy {
    public function calculate($order);
}
