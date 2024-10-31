<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Adapter;
interface EmailServiceInterface {
    public function sendEmail($to, $subject, $message);
}
