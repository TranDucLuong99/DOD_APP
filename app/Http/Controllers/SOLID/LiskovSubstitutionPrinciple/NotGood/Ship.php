<?php
namespace App\Http\Controllers\SOLID\LiskovSubstitutionPrinciple\NotGood;
// Lớp không liên quan đến Car
class Ship {
    public function sail() {
        return "Đi thuyền";
    }
}
