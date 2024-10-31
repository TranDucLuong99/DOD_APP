<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\State;
//Class xử lý đơn đã được giao, nó không cho phép tác động thêm (allowProcessing trả ra false)
class ShippedOrderState implements OrderState {
    public function getStatus() {
        return 'Shipped';
    }
    public function allowProcessing() {
        return false;
    }
}
