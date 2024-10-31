<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\NotGood;
// Class đèn
class Lamp {
    public function __construct()
    {
// Class bóng đèn được gắn chặt vào class Đèn qua từ khóa new
        $this->bulb = new Bulb();
    }
    public function turnOn() {}
}
