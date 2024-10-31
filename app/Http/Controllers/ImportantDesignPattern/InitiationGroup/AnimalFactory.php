<?php
namespace App\Http\Controllers\ImportantDesignPattern\InitiationGroup;
// Tạo lớp Factory
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

