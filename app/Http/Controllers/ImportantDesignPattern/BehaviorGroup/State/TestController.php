<?php

namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\State;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ImportantDesignPattern\StructureGroup\State\Ordert;

class TestController extends Controller
{
    public function get(){
        // Tạo đối tượng Order
        $order = new Ordert();
        // Thử kiểm tra xem có được thao tác không
        $order->allowProcessing(); // true
        // Chuyển trạng thái đến Shipped
        $order->setState(new ShippedOrderState());
        echo "Current Order Status: " . $order->getStatus() . "\n"; // Output: Shipped
        // Thử kiểm tra xem có được thao tác không
        $order->allowProcessing(); // false
    }
}
