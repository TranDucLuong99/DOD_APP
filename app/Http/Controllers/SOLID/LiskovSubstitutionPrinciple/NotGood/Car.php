<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\NotGood;
// Lớp cha
class Car {
    public function drive() {
        return "Lái xe";
    }
}
