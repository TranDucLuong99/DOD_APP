<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Observer;
// Class Order cho phép các observer đăng ký nhận sự kiện. Khi trạng thái đơn
//hàng thay đổi qua hàm setState, tiến hành gọi hàm notify() để thông báo đến tất cả các Observer.
class Order implements Subject {
    private $observers = [];
    private $state;
    public function attach(Observer $observer) {
        $this->observers[] = $observer;
    }
    public function detach(Observer $observer) {
        $this->observers = array_filter($this->observers, function($o) use
        ($observer) {
            return $o !== $observer;
        });
    }
    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this->state);
        }
    }
    public function setState($state) {
        $this->state = $state;
        $this->notify();
    }
    public function getState() {
        return $this->state;
    }
}
