<?php
namespace App\Http\Controllers\OOP\Inheritance;
// Class cha
class Animal {
    // Thuộc tính chung cho tất cả các động vật
    protected $name;
    // Constructor để khởi tạo tên động vật
    public function __construct($name) {
        $this->name = $name;
    }
    // Phương thức chung cho tất cả các động vật
    public function eat() {
        echo $this->name . " đang ăn\n";
    }
}
