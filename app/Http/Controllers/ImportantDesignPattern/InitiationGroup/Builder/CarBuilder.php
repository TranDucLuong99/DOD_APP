<?php
namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder;
// Định nghĩa class CarBuilder

class CarBuilder {
    private $car;
    public function __construct() {
        $this->car = new Car();
    }
    public function setModel($model) {
        $this->car->setModel($model);
        return $this;
    }
    public function setYear($year) {
        $this->car->setYear($year);
        return $this;
    }
    public function setColor($color) {
        $this->car->setColor($color);
        return $this;
    }
    public function build() {
        return $this->car;
    }
}

