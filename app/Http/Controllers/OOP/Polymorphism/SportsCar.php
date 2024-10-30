<?php
namespace App\Http\Controllers\OOP\Polymorphism;
// Lớp con Sports car kế thừa từ lớp cha Car
class SportsCar extends Car {
// Triển khai lại phương thức move cho SportsCar
    public function move() {
        echo "SportsCar đang chạy ở tốc độ cao\n";
    }
}
