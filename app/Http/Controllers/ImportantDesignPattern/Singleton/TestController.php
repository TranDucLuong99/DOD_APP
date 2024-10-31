<?php

namespace App\Http\Controllers\ImportantDesignPattern\Singleton;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        // Sử dụng Database Singleton
        $db1 = Database::getInstance();
        $conn1 = $db1->getConnection();
        $db2 = Database::getInstance();
        $conn2 = $db2->getConnection();
        // Kiểm tra xem hai kết nối có trỏ đến cùng một thể hiện không
        if ($conn1 === $conn2) {
            echo "Both connections are the same.\n";
        }

    }
}
