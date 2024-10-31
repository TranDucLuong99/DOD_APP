<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\TemplateMethod;
class OnlineOrderProcessor extends OrderProcessor {
    protected function selectItem() {
        echo "Selecting item from online store.\n";
    }
    protected function processPayment() {
        echo "Processing online payment.\n";
    }
    protected function shipItem() {
        echo "Shipping item to customer's address.\n";
    }
}

