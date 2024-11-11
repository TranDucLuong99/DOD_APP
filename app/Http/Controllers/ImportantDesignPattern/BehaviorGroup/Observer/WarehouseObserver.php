<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Observer;

class WarehouseObserver implements Observer {
    public function update($state) {
        echo "Warehouse: Order status has changed to $state. Prepare for shipping.\n";
    }
}


