<?php

namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Decorator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        // Sử dụng
        $basicCar = new BasicCar();
        echo "Giá của ô tô cơ bản: " . $basicCar->cost() . " USD\n";
        echo "Mô tả của ô tô cơ bản: " . $basicCar->description() . "\n\n";
        $carWithNavigation = new NavigationSystem($basicCar);
        echo "Giá của ô tô có hệ thống định vị: " . $carWithNavigation->cost() . "USD\n";
        echo "Mô tả của ô tô có hệ thống định vị: " . $carWithNavigation->description() .
            "\n\n";
        $carWithLeatherSeats = new LeatherSeats($basicCar);
        echo "Giá của ô tô có ghế da: " . $carWithLeatherSeats->cost() . " USD\n";
        echo "Mô tả của ô tô có ghế da: " . $carWithLeatherSeats->description() .
            "\n\n";
        $carWithBothOptions = new NavigationSystem(new LeatherSeats($basicCar));
        echo "Giá của ô tô có cả hệ thống định vị và ghế da: " .
            $carWithBothOptions->cost() . " USD\n";
        echo "Mô tả của ô tô có cả hệ thống định vị và ghế da: " .
            $carWithBothOptions->description() . "\n";


    }
}
