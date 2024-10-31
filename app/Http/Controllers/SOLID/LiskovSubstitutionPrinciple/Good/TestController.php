<?php

namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\Good;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // Code chạy thử gây lỗi
    function testCarFactory(CarFactory $factory) {
        $car = $factory->makeNewCar();
        echo $car->drive() . "\n"; // Lỗi vì Ship không có phương thức drive
    }
}
