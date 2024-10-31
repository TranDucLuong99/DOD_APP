<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\Good;
class EmailService implements MessageService {
    public function sendMessage($message) {
        echo "Sending email: $message\n";
    }
}

