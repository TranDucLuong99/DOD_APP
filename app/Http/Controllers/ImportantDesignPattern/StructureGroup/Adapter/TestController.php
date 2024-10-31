<?php

namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Adapter;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get(){
        // Sử dụng EmailService nhưng bên dưới nó sẽ gửi qua AWS
        $emailService = new AWSAdapter(new SendEmailAWS());
        $emailService->sendEmail('recipient@example.com', 'Chủ đề', 'Nội dung');
    }
}
