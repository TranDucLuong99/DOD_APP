SOLID là các nguyên tắc quan trọng trong Lập trình hướng đối tượng, được Robert Martin (Uncle
Bob) gới thiệu trong quyển “Agile Software Development, Principles, Patterns, and Practices” của
ông. SOLID bao gồm năm nguyên tắc đại diện cho năm chữ cái, nhằm mục tiêu giúp các thiết kế
phần mềm trở nên dễ hiểu, linh hoạt và dễ bảo trì.
Tuy nhiên, áp dụng SOLID cần cẩn thận và linh hoạt theo tình huống. Chi phí áp dụng và độ phức tạp
có thể tăng nếu bạn áp dụng nó một cách máy móc. Hãy cùng đi một vòng các nguyên tắc này, mình
sẽ giúp bạn phân tích, trước khi chúng ta sang section về Design Pattern nhé:

Nguyên Tắc Trách Nhiệm Duy Nhất (Single Responsibility Principle)
“Một Class chỉ nên có một lý do để thay đổi.” - Uncle Bob
Hãy cố gắng đảm bảo rằng một Class chỉ làm một việc, và duy nhất một việc mà thôi. Công việc này
cũng cần được đóng gói một cách gọn gàng bên trong Class đó, và chỉ cho bên ngoài truy cập khi
cần thiết.
Mục tiêu chính của nguyên tắc này là giảm bớt đi sự phức tạp. Áp dụng triệt để nguyên tắc này, bạn
sẽ không còn lo sợ việc phải viết những đoạn code dài hàng gang tay, hoặc phải maintain những ứng
dụng nghiệp vụ khù khoằm. Nếu bạn đã đọc cuốn: “Thiết kế hướng nghiệp vụ với Laravel” của mình,
chắc hẳn bạn đã hiểu phần nào mindset này.
Có một tips mình thường xuyên áp dụng để đảm bảo Single Responsibility, đó là thiết kế theo hướng
“Use case”. Các class của mình chỉ có một hàm duy nhất là “handle” (hoặc “execute”) và nó chỉ làm
duy nhất một công việc. Nếu có một nghiệp vụ mới phát sinh, mình sẽ tạo Class mới (với hàm
“handle”/”execute”) mới, cứ như vậy. Nếu bạn quan sát Laravel, bạn cũng sẽ thấy họ áp dụng rất
thường xuyên cách thức này: Các class Jobs / Listeners đều đơn lẻ, và được kích hoạt qua hàm
handle duy nhất. Đó cũng là cách áp dụng nguyên tắc đóng gói ở mức Class, mình đã trình bày ở
bên trên.

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\UserService;
class RegisterUserController extends Controller
{
protected $userService;
public function __construct(UserService $userService)

{
$this->userService = $userService;
}
public function __invoke(Request $request)
{
$data = $request->validate([
'name' => 'required|string|max:255',
'email' => 'required|string|email|max:255|unique:users',
'password' => 'required|string|min:8|confirmed',
]);
$this->userService->register($data);
return response()->json(['message' => 'User registered successfully'],
201);
}
}
Trong ví dụ bên trên, bạn có thể thấy mình sử dụng Single Action Controller (Một khái niệm được sử
dụng rất phổ biến trong cộng đồng Laravel). Trong class RegisterUserController được kích hoạt duy
nhất qua hàm __invoke(), và nó sẽ chỉ làm duy nhất công việc đăng ký User.
Khi bạn không đảm bảo tính trách nhiệm duy nhất, cơn ác mộng sẽ tới khi ứng dụng của bạn gặp
phải những thay đổi. Một class Service lớn, khiến bạn bối rối khi phải sửa nó để đáp ứng nghiệp vụ.
Và rất có thể, bạn có nguy cơ thay đổi những thứ mà bạn không mong muốn, dẫn tới những lỗi tiềm
ẩn trong tương lai #
