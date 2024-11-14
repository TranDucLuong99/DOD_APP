<?php

namespace App\Http\Controllers\SOLID\SingleResponsibilityPrinciple;

use App\Http\Controllers\Controller;
use App\Jobs\SOLID\SingleResponsibilityPrinciple\SendWelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    //Trong Laravel, nguyên tắc SOLID là một bộ năm nguyên tắc giúp xây dựng mã dễ bảo trì, mở rộng và linh hoạt. Dưới đây là một số ví dụ cụ thể về SOLID trong Laravel.
    //
    //1. Single Responsibility Principle (SRP)
    //Mỗi class chỉ nên có một nhiệm vụ duy nhất. Điều này giúp mã dễ hiểu và dễ bảo trì hơn.
    //
    //Ví dụ:
    //Giả sử chúng ta có một yêu cầu xử lý việc đăng ký người dùng và gửi email chào mừng. Không nên đặt tất cả logic này trong UserController.
    //
    //Thay vào đó, chúng ta có thể tạo các class riêng biệt cho từng nhiệm vụ
    //Controller chỉ tập trung vào đăng ký:
    public function register(Request $request)
    {
        $user = User::create($request->all());

        // Dispatch email job
        SendWelcomeEmail::dispatch($user);

        return response()->json(['message' => 'User registered successfully']);
    }
}
