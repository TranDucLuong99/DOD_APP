<?php

namespace App\Http\Controllers\OOP\Encapsulation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EncapsulationController extends Controller
{
    public function usePerson(){
        $person = new Person("John Doe", 30);
        // Truy cập và thay đổi các thuộc tính thông qua các phương thức
        echo "Name: " . $person->getName() . "\n"; // Output: Name: John Doe
        echo "Age: " . $person->getAge() . "\n"; // Output: Age: 30
        // Đặt lại giá trị cho thuộc tính name và age
        $person->setName("Jane Doe");
        $person->setAge(25);
        echo "Updated Name: " . $person->getName() . "\n"; // Output: Updated Name: Jane Doe
        echo "Updated Age: " . $person->getAge() . "\n"; // Output: Updated Age: 25
        // Thử đặt tuổi không hợp lệ
        $person->setAge(-5);
        echo "Age after invalid update: " . $person->getAge() . "\n"; // Output: Age after invalid update: 25
    }
}
