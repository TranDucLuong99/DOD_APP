<?php

namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\TemplateMethod;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        // Xử lý đơn hàng trực tuyến
        $onlineOrder = new OnlineOrderProcessor();
        echo "Processing online order:\n";
        $onlineOrder->processOrder();
        // Xử lý đơn hàng tại cửa hàng
        $inStoreOrder = new InStoreOrderProcessor();
        echo "Processing in-store order:\n";
        $inStoreOrder->processOrder();

    }
}
