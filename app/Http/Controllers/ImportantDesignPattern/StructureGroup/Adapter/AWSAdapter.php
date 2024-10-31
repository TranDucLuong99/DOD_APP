<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Adapter;

class AWSAdapter implements EmailServiceInterface {
    private $awsService;
    public function __construct(SendEmailAWS $awsService) {
        $this->awsService = $awsService;
    }
    public function sendEmail($to, $subject, $message) {
        // Chuyển đổi từ giao diện hiện có sang giao diện của AWS
        $email = [
            'to' => $to,
            'subject' => $subject,
            'message' => $message
        ];
        $this->awsService->send($email);
    }
}
