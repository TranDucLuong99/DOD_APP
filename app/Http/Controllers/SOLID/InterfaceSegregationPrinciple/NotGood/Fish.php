<?php
// Trước khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\NotGood;
class Fish implements Moveable {
    public function move() {
        echo "Fish swims";
    }
}

