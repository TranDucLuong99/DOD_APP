<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\Good;
// Lớp cha với phương thức makeNewCar
class CarFactory {
    public function makeNewCar(): Car {
        return new Car();
    }
}


