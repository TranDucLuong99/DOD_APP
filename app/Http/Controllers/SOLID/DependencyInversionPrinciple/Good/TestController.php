<?php

namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\Good;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        // Sử dụng lớp Notification với EmailService
        $emailService = new EmailService();
        $notification = new Notification($emailService);
        $notification->send("Hello via Email!");
        // Sử dụng lớp Notification với SmsService
        $smsService = new SmsService();
        $notification = new Notification($smsService);
        $notification->send("Hello via SMS!");
    }
}
