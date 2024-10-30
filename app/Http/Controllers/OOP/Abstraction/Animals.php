<?php
//Tính Trừu tượng (Abstraction)
// Định nghĩa một lớp trừu tượng Animal
namespace App\Http\Controllers\OOP\Abstraction;
abstract class Animals
{
    // Phương thức trừu tượng makeSound không có triển khai
    abstract public function makeSound();
    // Phương thức thông thường
    public function move() {
        echo "Động vật đang di chuyển\n";
    }
}
