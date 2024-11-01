Trừu tượng (Abstraction)
Khi làm việc với OOP, chúng ta luôn cố gắng mô tả một đối tượng tồn tại ngoài thực tế. Một chú chó
có bốn chân, một chiếc xe ô tô có bốn bánh. Tuy nhiên, không phải lúc nào bạn cũng cần mọi chi tiết
của đối tượng: có khi bạn quan tâm đến tốc độ của chiếc xe, nhưng cũng có khi bạn lại chỉ cần quan
tâm đến số chỗ ngồi trên xe đó.
Trừu tượng là một mô hình của một đối tượng hoặc hiện tượng trong thế giới thực, giới hạn trong
một ngữ cảnh cụ thể, đại diện cho tất cả các chi tiết liên quan đến ngữ cảnh này với độ chính xác
cao và bỏ qua tất cả các phần còn lại.
Ví dụ kinh điển sau về Animal, Cat, Dog sẽ giúp bạn dễ dàng hiểu về trừu tượng
<?php
// Định nghĩa một lớp trừu tượng Animal
abstract class Animal {
// Phương thức trừu tượng makeSound không có triển khai
abstract public function makeSound();
// Phương thức thông thường
public function move() {
echo "Động vật đang di chuyển\n";
}
}
// Lớp Dog kế thừa từ lớp trừu tượng Animal
class Dog extends Animal {
// Triển khai phương thức trừu tượng makeSound
public function makeSound() {
echo "Gâu gâu\n";
}
}
// Lớp Cat kế thừa từ lớp trừu tượng Animal
class Cat extends Animal {
// Triển khai phương thức trừu tượng makeSound
public function makeSound() {
echo "Meo meo\n";
}
}
// Sử dụng các lớp con
$dog = new Dog();
$cat = new Cat();
$dog->makeSound(); // Output: Gâu gâu
$dog->move(); // Output: Động vật đang di chuyển
$cat->makeSound(); // Output: Meo meo
$cat->move(); // Output: Động vật đang di chuyển
?>
Lớp trừu tượng Animal:
● Định nghĩa một phương thức trừu tượng makeSound mà không có triển khai.
● Định nghĩa một phương thức thông thường move có triển khai cụ thể.
Lớp Dog và Cat:
● Kế thừa từ lớp trừu tượng Animal.
● Cung cấp triển khai cụ thể cho phương thức trừu tượng makeSound.
