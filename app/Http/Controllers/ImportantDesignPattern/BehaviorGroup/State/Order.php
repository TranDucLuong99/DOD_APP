<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\State;
//Tạo class Order để lưu trạng thái

class Order {
    private $state;
// Khởi tạo bằng trạng thái New
    public function __construct() {
        $this->state = new NewOrderState();
    }
    public function setState(OrderState $state) {
        $this->state = $state;
    }
    public function getStatus() {
        return $this->state->getStatus();
    }
    public function allowProcessing() {
        return $this->state->allowProcessing();
    }
}

