<?php
namespace App\Http\Controllers\OOP\Polymorphism;
// Lớp con Sedan kế thừa từ lớp cha Car
class Sedan extends Car {
// Triển khai lại phương thức move cho Sedan
    public function move() {
        echo "Sedan đang chạy trên đường\n";
    }
}
