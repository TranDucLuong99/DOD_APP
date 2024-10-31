<?php
// Sau khi áp dụng Interface Segregation Principle
namespace App\Http\Controllers\SOLID\InterfaceSegregationPrinciple\Good;
class Cat implements Runnable {
    public function run() {
        echo "Cat runs";
    }
}

