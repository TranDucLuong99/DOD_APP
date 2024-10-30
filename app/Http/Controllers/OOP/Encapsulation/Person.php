<?php
namespace App\Http\Controllers\OOP\Encapsulation;
class Person{
    // Các thuộc tính private chỉ có thể được truy cập trong class này
    private $name;
    private $age;
    // Constructor để khởi tạo đối tượng
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Phương thức public để lấy giá trị của thuộc tính name
    public function getName(){
        return $this->name;
    }

    // Phương thức public để đặt giá trị của thuộc tính name
    public function setName($name) {
        $this->name = $name;
    }

    // Phương thức public để lấy giá trị của thuộc tính age
    public function getAge() {
        return $this->age;
    }
    // Phương thức public để đặt giá trị của thuộc tính age
    public function setAge($age) {
        if ($age > 0) { // Đảm bảo tuổi phải là số dương
            $this->age = $age;
        }
    }
}
