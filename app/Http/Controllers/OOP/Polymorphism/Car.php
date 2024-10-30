<?php
namespace App\Http\Controllers\OOP\Polymorphism;
// Lớp cha
class Car {
// Phương thức chung cho tất cả các loại xe
    public function move() {
        echo "Xe đang di chuyển\n";
    }
}

