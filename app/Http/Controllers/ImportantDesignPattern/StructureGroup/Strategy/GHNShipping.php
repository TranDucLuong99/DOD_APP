<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Strategy;
class GHNShipping implements ShippingStrategy {
    public function calculate($order) {
// Giả lập logic tính phí vận chuyển của GHN
        return 12000;
    }
}

