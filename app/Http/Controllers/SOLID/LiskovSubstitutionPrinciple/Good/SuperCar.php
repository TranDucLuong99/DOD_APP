<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\Good;
// Lớp SuperCar

class SuperCar extends Car {
    public function drive() {
        return "Lái siêu xe";
    }
}
