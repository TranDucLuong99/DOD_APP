<?php
namespace App\Http\Controllers\ImportantDesignPattern\StructureGroup\Observer;
// Định nghĩa interface subject, để chuẩn bị cho việc thêm (attach) observer, bớt (detach), và gửi thông báo (notify) tới các Observer
interface Subject {
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}