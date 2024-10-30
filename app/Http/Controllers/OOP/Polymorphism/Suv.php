<?php
namespace App\Http\Controllers\OOP\Polymorphism;
// Lớp con SUV kế thừa từ lớp cha Car
class Suv extends Car {
// Triển khai lại phương thức move cho SUV
    public function move() {
        echo "SUV đang chạy trên địa hình khó khăn\n";
    }
}
