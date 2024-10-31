Template Method
Template Method là một mẫu thiết kế hành vi định nghĩa một bộ khung (template) tại class cha, và
đưa việc triển khai xuống dưới các class con. Điều này giúp bạn định nghĩa các bước trong một
template duy nhất, và trong đó có thể có các bước được sử dụng chung, và các bước sẽ cần được
triển khai tuỳ thuộc các class con.
Dấu hiệu nhận biết:
Template Method cũng khá dễ nhận biết. Khi bạn có nghiệp vụ bao gồm một tập hợp các bước, bạn
có thể đưa nó vào một Abstract Class. Các bước sử dụng chung sẽ được đưa vào các phương thức
thông thường. Các bước cần sử dụng riêng sẽ là các abstract method và được triển khai tại các lớp
con. Nói chung cái khó là bạn cần phân tích và chia tách nghiệp vụ của mình một cách hợp lý.
Ví dụ:
<?php
// Định nghĩa bộ khung (Template) xử lý đơn hàng
abstract class OrderProcessor {
// Phương thức template định nghĩa bộ khung
public function processOrder() {
$this->selectItem();
$this->processPayment();
$this->shipItem();
}
// Các phương thức trừu tượng sẽ được ghi đè bởi các lớp con
abstract protected function selectItem();
abstract protected function processPayment();
abstract protected function shipItem();
}
class OnlineOrderProcessor extends OrderProcessor {
protected function selectItem() {
echo "Selecting item from online store.\n";
}
protected function processPayment() {
echo "Processing online payment.\n";
}
protected function shipItem() {
echo "Shipping item to customer's address.\n";
}
}
class InStoreOrderProcessor extends OrderProcessor {
protected function selectItem() {
echo "Selecting item from store shelf.\n";
}
protected function processPayment() {
echo "Processing in-store payment.\n";
}
protected function shipItem() {
echo "Customer takes the item home.\n";
}
}
// Xử lý đơn hàng trực tuyến
$onlineOrder = new OnlineOrderProcessor();
echo "Processing online order:\n";
$onlineOrder->processOrder();
// Xử lý đơn hàng tại cửa hàng
$inStoreOrder = new InStoreOrderProcessor();
echo "Processing in-store order:\n";
$inStoreOrder->processOrder();
?>
