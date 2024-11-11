<?php

namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\DependencyInjection\Good;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\Good\GreenBulb;
use App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\Good\RedBulb;

class TestController extends Controller
{
   public function get(){
       $lamp = new Lamp(new GreenBulb());
//       Một cái đèn màu đỏ, thì sẽ là:
       $lamp = new Lamp(new RedBulb());
   }
}
