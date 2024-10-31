<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Command;
// Tạo các class Command cụ thể
class TurnOffLightCommand implements Command {
    private $light;
    public function __construct(Light $light) {
        $this->light = $light;
    }
    public function execute() {
        $this->light->turnOff();
    }
}


