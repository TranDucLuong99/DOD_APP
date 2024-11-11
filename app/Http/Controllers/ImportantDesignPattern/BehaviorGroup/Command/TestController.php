<?php

namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Command;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Tạo đối tượng Light
        $light = new Light();
        // Tạo đối tượng Command\
        $turnOnCommand = new TurnOnLightCommand($light);
        $turnOffCommand = new TurnOffLightCommand($light);
        // Tạo đối tượng RemoteControl
        $remote = new RemoteControl();
        // Bật đèn
        $remote->setCommand($turnOnCommand);
        $remote->pressButton(); // Output: The light is on
        // Tắt đèn
        $remote->setCommand($turnOffCommand);
        $remote->pressButton(); // Output: The light is off
    }
}
