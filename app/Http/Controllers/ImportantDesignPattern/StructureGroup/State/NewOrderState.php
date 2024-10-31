<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\State;
// Các trạng thái được tách thành các class riêng biệt để phân chia trách nhiệm xử lý logic.
//Class xử lý đơn mới, nó cho phép tác động thêm (allowProcessing trả ra true)
class NewOrderState implements OrderState {
    public function getStatus() {
        return 'New';
    }
    public function allowProcessing() {
        return true;
    }
}
