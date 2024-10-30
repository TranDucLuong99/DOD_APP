<?php
// Lớp Dog kế thừa từ lớp trừu tượng Animal
namespace App\Http\Controllers\OOP\Abstraction;
class Dog extends Animals{
    // Triển khai phương thức trừu tượng makeSound
    public function makeSound() {
        echo "Gâu gâu\n";
    }
}
