<?php
// Lớp Cat kế thừa từ lớp trừu tượng Animal
namespace App\Http\Controllers\OOP\Abstraction;
class Cat extends Animals {
    // Triển khai phương thức trừu tượng makeSound
    public function makeSound() {
        echo "Meo meo\n";
    }
}
