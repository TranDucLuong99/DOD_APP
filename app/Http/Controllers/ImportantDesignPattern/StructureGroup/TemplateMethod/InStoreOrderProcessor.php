<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\TemplateMethod;
class InStoreOrderProcessor extends OrderProcessor {
    protected function selectItem() {
        echo "Selecting item from store shelf.\n";
    }
    protected function processPayment() {
        echo "Processing in-store payment.\n";
    }
    protected function shipItem() {
        echo "Customer takes the item home.\n";
    }
}
