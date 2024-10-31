<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\Good;
class SmsService implements MessageService {
    public function sendMessage($message) {
        echo "Sending SMS: $message\n";
    }

}

