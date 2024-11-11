<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\DependencyInjection\NotGood;
// Class đèn
use App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\NotGood\Bulb;

class Lamp {
    public function __construct()
    {
// Class bóng đèn được gắn chặt vào class Đèn qua từ khóa new
        $this->bulb = new Bulb();
    }
    public function turnOn() {}
}
