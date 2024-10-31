<?php
// Trước khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\NotGood;
class Bird implements Moveable {
    public function move() {
        echo "Bird flies";
    }
}

