<?php

namespace App\Http\Controllers\OOP\Abstraction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbstractionController extends Controller
{
    public function exportSound(){
        // Sử dụng các lớp con
        $dog = new Dog();
        $cat = new Cat();
        $dog->makeSound(); // Output: Gâu gâu
        $dog->move(); // Output: Động vật đang di chuyển
        $cat->makeSound(); // Output: Meo meo
        $cat->move(); // Output: Động vật đang di chuyển
    }
}
