<?php

namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Sử dụng CarBuilder để tạo đối tượng Car
        $builder = new CarBuilder();
        $car = $builder->setModel('Corolla')
            ->setYear(2020)
            ->setColor('Red')
            ->build();
        echo $car; // Output: Red 2020 Corolla

        $orderBuilder = new OrderBuilder();
        $order = $orderBuilder->setName('Đơn Hàng Máy Bay')->setPrice(1000000)->setDescription('Lô hàng quan trọng')->build();
        echo $order;
    }
}
