<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\Good;
class Notification {
    private $service;
    public function __construct(MessageService $service) {
        $this->service = $service;
    }
    public function send($message) {
        $this->service->sendMessage($message);
    }
}


