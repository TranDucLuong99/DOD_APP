<?php
//Tính Trừu tượng (Abstraction)
// Định nghĩa một lớp trừu tượng Animal
namespace App\Http\Controllers\OOP\Abstraction;
abstract class Animals
{
    // Phương thức trừu tượng makeSound không có triển khai
    /**
     * @return mixed
     */
    abstract public function makeSound();
    // Phương thức thông thường

    /**
     * @return void
     */
    public function move() {
        echo "Động vật đang di chuyển\n";
    }
}
