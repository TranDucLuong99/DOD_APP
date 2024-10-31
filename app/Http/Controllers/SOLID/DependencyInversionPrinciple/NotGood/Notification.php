<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\NotGood;

class Notification {
    private $emailService;
    public function __construct() {
        $this->emailService = new EmailService();
    }
    public function send($message) {
        $this->emailService->sendEmail($message);
    }
}

