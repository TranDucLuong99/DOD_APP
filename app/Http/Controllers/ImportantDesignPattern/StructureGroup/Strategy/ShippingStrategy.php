<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Strategy;
// Định nghĩa Strategy Shipping (Chiến lược vận chuyển)
interface ShippingStrategy {
    public function calculate($order);
}
