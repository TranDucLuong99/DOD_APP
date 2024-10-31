<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\Good;
// Lớp con với phương thức makeNewCar trả về Ship (không phải là lớp con củaCar)
class ShipFactory extends CarFactory {
    public function makeNewCar(): Ship {
        return new Ship();
    }
}


