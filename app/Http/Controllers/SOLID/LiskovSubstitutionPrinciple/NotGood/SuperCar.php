<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\NotGood;
// Lớp SuperCar

class SuperCar extends Car {
    public function drive() {
        return "Lái siêu xe";
    }
}
