<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\Good;
// Lớp cha
class Car {
    public function drive() {
        return "Lái xe";
    }
}
