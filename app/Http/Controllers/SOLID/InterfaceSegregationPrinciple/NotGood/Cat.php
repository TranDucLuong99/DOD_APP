<?php
// Trước khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\NotGood;
class Cat implements Moveable {
    public function move() {
        echo "Cat runs";
    }
}
