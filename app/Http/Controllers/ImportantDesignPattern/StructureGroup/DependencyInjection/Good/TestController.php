<?php

namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\DependencyInjection\Good;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
   public function get(){
       $lamp = new Lamp(new GreenBulb());
//       Một cái đèn màu đỏ, thì sẽ là:
       $lamp = new Lamp(new RedBulb());
   }
}
