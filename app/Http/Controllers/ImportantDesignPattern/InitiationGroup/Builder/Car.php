<?php
// Định nghĩa class Car
namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder;
class Car {
    private $model;
    private $year;
    private $color;
    public function setModel($model) {
        $this->model = $model;
    }
    public function setYear($year) {
        $this->year = $year;
    }
    public function setColor($color) {
        $this->color = $color;
    }
    public function __toString() {
        return "{$this->color} {$this->year} {$this->model}";
    }
}
