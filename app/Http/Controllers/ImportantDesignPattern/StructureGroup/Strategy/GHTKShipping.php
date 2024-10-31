<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Strategy;
// Tạo ra các phương thức vận chuyển khác nhau
class GHTKShipping implements ShippingStrategy {
    public function calculate($order) {
// Giả lập logic tính phí vận chuyển của GHTK
        return 1000;
    }
}
