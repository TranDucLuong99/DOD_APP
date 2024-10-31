<?php

namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\NotGood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        // Sử dụng lớp Notification
        $notification = new Notification();
        $notification->send("Hello, World!");
    }
}
