<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\NotGood;
class EmailService {
    public function sendEmail($message) {
        echo "Sending email: $message\n";
    }
}
