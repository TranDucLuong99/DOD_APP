<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\NotGood;
// Lớp cha với phương thức makeNewCar

class CarFactory {
    public function makeNewCar(): Car {
        return new Car();
    }
}

