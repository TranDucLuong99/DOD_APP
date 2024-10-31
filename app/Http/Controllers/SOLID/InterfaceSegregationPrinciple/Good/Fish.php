<?php
// Sau khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\Good;
class Fish implements Swimmable {
    public function swim() {
        echo "Fish swims";
    }
}



