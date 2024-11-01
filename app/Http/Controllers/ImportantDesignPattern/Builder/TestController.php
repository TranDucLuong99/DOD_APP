<?php

namespace App\Http\Controllers\ImportantDesignPattern\Builder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    }
}
