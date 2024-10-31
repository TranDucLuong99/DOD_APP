<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Adapter;
class SendEmailAWS {
    public function send($email) {
    // Gửi email bằng API của AWS SES
        echo "Đã gửi email thông qua AWS SES";
    }
}

