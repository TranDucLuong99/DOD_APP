<?php
namespace App\Http\Controllers\SOLID\DependencyInversionPrinciple\Good;
interface MessageService {
    public function sendMessage($message);
}
