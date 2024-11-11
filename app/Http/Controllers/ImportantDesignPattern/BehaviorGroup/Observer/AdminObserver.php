<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Observer;

class AdminObserver implements Observer {
    public function update($state) {
        echo "Admin: Order status has changed to $state.\n";
    }
}


