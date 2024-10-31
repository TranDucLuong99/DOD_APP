<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\Good;
// Class đèn
class Lamp
{
// Injection thông qua Interface Bulb, hoặc cũng có thể là Abstract ClassBulb
    public function __construct(
        Bulb $bulb
    ) {
        $this->bulb = $bulb;
    }
    public function turnOn()
    {
        $this->bulb->turnOn();
    }
}

