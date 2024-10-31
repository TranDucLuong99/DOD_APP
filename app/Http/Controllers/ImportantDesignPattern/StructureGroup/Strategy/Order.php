<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Strategy;
class Order {
    private $shippingStrategy;
    public function __construct(ShippingStrategy $shippingStrategy) {
        $this->shippingStrategy = $shippingStrategy;
    }
    public function setShippingStrategy(ShippingStrategy $shippingStrategy) {
        $this->shippingStrategy = $shippingStrategy;
    }
    public function calculateShipping() {
// Giả lập một đối tượng đơn hàng
        $order = [];
        return $this->shippingStrategy->calculate($order);
    }
}

