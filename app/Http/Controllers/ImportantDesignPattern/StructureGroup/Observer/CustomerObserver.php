<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Observer;
// Các Observer sẽ đăng ký nhận thông tin
class CustomerObserver implements Observer {
    public function update($state) {
        echo "Customer: Your order status has changed to $state.\n";
    }
}

