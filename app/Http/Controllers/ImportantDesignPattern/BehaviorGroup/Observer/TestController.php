<?php

namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Observer;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Sử dụng Observer
// Tạo đối tượng Order
        $order = new Order();
// Tạo các đối tượng Observer
        $customerObserver = new CustomerObserver();
        $adminObserver = new AdminObserver();
        $warehouseObserver = new WarehouseObserver();
// Gắn các Observer vào Order
        $order->attach($customerObserver);
        $order->attach($adminObserver);
        $order->attach($warehouseObserver);
// Thay đổi trạng thái của Order
        $order->setState('Processing'); // Output:
// Customer: Your order status has changed to Processing.
// Admin: Order status has changed to Processing.
// Warehouse: Order status has changed to Processing. Prepare for shipping.
// Thay đổi trạng thái của Order lần nữa
        $order->setState('Shipped'); // Output:
// Customer: Your order status has changed to Shipped.
// Admin: Order status has changed to Shipped.
// Warehouse: Order status has changed to Shipped. Prepare for shipping.
// Tháo một Observer
        $order->detach($warehouseObserver);
// Thay đổi trạng thái của Order lần nữa
        $order->setState('Delivered'); // Output:
// Customer: Your order status has changed toDelivered.
// Admin: Order status has changed to Delivered.
    }
}
