<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\TemplateMethod;
// Định nghĩa bộ khung (Template) xử lý đơn hàng
abstract class OrderProcessor {
// Phương thức template định nghĩa bộ khung
    public function processOrder() {
        $this->selectItem();
        $this->processPayment();
        $this->shipItem();
    }
// Các phương thức trừu tượng sẽ được ghi đè bởi các lớp con
    abstract protected function selectItem();
    abstract protected function processPayment();
    abstract protected function shipItem();
}
