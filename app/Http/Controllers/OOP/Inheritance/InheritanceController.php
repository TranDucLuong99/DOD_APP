<?php

namespace App\Http\Controllers\OOP\Inheritance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InheritanceController extends Controller
{
    public function getSound(){
        $dog = new Dog("Chó");
        $cat = new Cat("Mèo");
        $dog->eat(); // Output: Chó đang ăn
        $dog->bark(); // Output: Chó sủa: Gâu gâu
        $cat->eat(); // Output: Mèo đang ăn
        $cat->meow(); // Output: Mèo kêu: Meo meo
    }
}
