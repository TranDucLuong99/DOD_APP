<?php
// Decorator
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Decorator;
abstract class CarDecorator implements Car {
    protected $car;
    public function __construct(Car $car) {
        $this->car = $car;
    }
    public function cost() {
        return $this->car->cost();
    }
    public function description() {
        return $this->car->description();
    }
}


