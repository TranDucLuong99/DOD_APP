<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Adapter;

class EmailService implements EmailServiceInterface {
    public function sendEmail($to, $subject, $message) {
        // Gửi email bằng thư viện đã có
        echo "Đã gửi email đến $to với chủ đề: $subject và nội dung: $message";
    }
}
