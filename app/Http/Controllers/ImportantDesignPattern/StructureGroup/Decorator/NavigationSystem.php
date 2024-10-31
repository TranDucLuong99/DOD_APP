<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Decorator;
// Class decorate thêm hệ thống định vị
class NavigationSystem extends CarDecorator {
    public function cost() {
        return $this->car->cost() + 2000; // Giá của hệ thống định vị là 2,000USD
    }
    public function description() {
        return $this->car->description() . ", có hệ thống định vị";
    }
}



