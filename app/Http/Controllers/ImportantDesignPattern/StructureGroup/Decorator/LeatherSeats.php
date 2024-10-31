<?php
// Class decorate thêm ghế da
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Decorator;

class LeatherSeats extends CarDecorator {
    public function cost() {
        return $this->car->cost() + 1500; // Giá của ghế da là 1,500 USD
    }
    public function description() {
        return $this->car->description() . ", có ghế da";
    }
}



