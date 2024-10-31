<?php

namespace App\Http\Controllers\SOLID\SingleResponsibilityPrinciple;

use App\Http\Controllers\Controller;
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
        return response()->json(['message' => 'User registered successfully'], 201);
    }
/*Trong ví dụ bên trên, bạn có thể thấy mình sử dụng Single Action Controller (Một khái niệm được sử
dụng rất phổ biến trong cộng đồng Laravel). Trong class RegisterUserController được kích hoạt duy
nhất qua hàm __invoke(), và nó sẽ chỉ làm duy nhất công việc đăng ký User.
Khi bạn không đảm bảo tính trách nhiệm duy nhất, cơn ác mộng sẽ tới khi ứng dụng của bạn gặp
phải những thay đổi. Một class Service lớn, khiến bạn bối rối khi phải sửa nó để đáp ứng nghiệp vụ.
Và rất có thể, bạn có nguy cơ thay đổi những thứ mà bạn không mong muốn, dẫn tới những lỗi tiềm
ẩn trong tương lai.*/
}
