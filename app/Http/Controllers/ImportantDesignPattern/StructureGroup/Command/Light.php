<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Command;
// Tạo class Light được tương tác bởi Command
class Light {
    public function turnOn() {
        echo "The light is on\n";
    }
    public function turnOff() {
        echo "The light is off\n";
    }
}


