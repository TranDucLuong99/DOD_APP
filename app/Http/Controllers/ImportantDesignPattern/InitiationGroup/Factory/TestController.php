<?php

namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Factory;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Sử dụng Factory để tạo đối tượng Dog
        $factory = new AnimalFactory();

        $dog = $factory->createAnimal('dog');
        echo $dog->speak(); // Output: Gâu gâu
        // Sử dụng Factory để tạo đối tượng Cat
        $cat = $factory->createAnimal('cat');
        echo $cat->speak(); // Output: Meo meo
    }
}
