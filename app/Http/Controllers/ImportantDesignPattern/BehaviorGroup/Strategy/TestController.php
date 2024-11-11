<?php

namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Strategy;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Tạo đối tượng Order với GHTKShipping Strategy
        $order = new Order(new GHTKShipping ());
        echo "GHTK Shipping Cost: $" . $order->calculateShipping() . "\n"; // Output:GHTK Shipping Cost: 1000
        // Thay đổi Strategy thành GHNShipping
        $order->setShippingStrategy(new GHNShipping());
        echo "GHN Shipping Cost: $" . $order->calculateShipping() . "\n"; // Output: GHNShipping Cost: 12000
        // Thay đổi Strategy thành ViettelPostShipping
        $order->setShippingStrategy(new ViettelPostShipping());
        echo "ViettelPost Shipping Cost: $" . $order->calculateShipping() . "\n"; //Output: ViettelPost Shipping Cost: 15000
    }
}
