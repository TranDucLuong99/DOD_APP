<?php
namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Factory;
// Tạo lớp Factory
use App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Exception;

class AnimalFactory {
// Phương thức để tạo đối tượng Animal dựa trên loại (type)
    public function createAnimal($type) {
        switch ($type) {
            case 'dog':
                return new Dog();
            case 'cat':
                return new Cat();
            default:
                throw new Exception("Invalid animal type");
        }
    }
}

