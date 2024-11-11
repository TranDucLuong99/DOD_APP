<?php
namespace App\Http\Controllers\ImportantDesignPattern\BehaviorGroup\Observer;
// Định nghĩa interface subject, để chuẩn bị cho việc thêm (attach) observer, bớt (detach), và gửi thông báo (notify) tới các Observer
interface Observer {
    public function update($state);
}

