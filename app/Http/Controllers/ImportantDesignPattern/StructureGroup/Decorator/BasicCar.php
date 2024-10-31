<?php
// Class cơ bản đại diện cho ô tô

namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Decorator;
class BasicCar implements Car {
    public function cost() {
        return 20000; // Giá của ô tô cơ bản là 20,000 USD
    }
    public function description() {
        return "Ô tô cơ bản";
    }
}

