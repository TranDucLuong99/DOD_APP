<?php

namespace App\Http\Controllers\OOP\Polymorphism;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PolyMorphismController extends Controller
{
    // Hàm để kiểm tra tính đa hình
    function testCarMovement(Car $car) {
        $car->move();
    }

    public function get(){
        // Sử dụng các lớp con
        $sedan = new Sedan();
        $suv = new SUV();
        $sportsCar = new SportsCar();

        $this->testCarMovement($sedan); // Output: Sedan đang chạy trên đường
        $this->testCarMovement($suv); // Output: SUV đang chạy trên địa hình khó khăn
        $this->testCarMovement($sportsCar); // Output: SportsCar đang chạy ở tốc độ cao
    }

}
