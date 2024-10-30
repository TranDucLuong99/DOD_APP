<?php
namespace App\Http\Controllers\OOP\Inheritance;
// Clas con Dog kế thừa từ lớp cha Animal
class Dog extends Animal {
    // Phương thức đặc trưng cho Dog
    public function bark() {
        echo $this->name . " sủa: Gâu gâu\n";
    }
}
