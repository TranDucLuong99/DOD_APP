<?php
// Sau khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\Good;
class Bird implements Flyable {
    public function fly() {
        echo "Bird flies";
    }
}


