<?php
namespace App\Http\Controllers\OOP\Inheritance;
// Class con Cat kế thừa từ lớp cha Animal
class Cat extends Animal
{
    // Phương thức đặc trưng cho Cat
    public function meow() {
        echo $this->name . " kêu: Meo meo\n";
    }
}
