<?php

namespace App\Http\Controllers\SOLID;

use App\Http\Controllers\Controller;
use App\Services\Gateways\PayPalGateway;
use App\Services\Gateways\StripeGateway;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    //Đây là ví dụ tổng quát:
    /*
        Giải thích cách áp dụng SOLID
        Single Responsibility Principle (SRP):

        Controller chỉ nhận và xử lý yêu cầu HTTP.
        PaymentService chịu trách nhiệm chính cho logic thanh toán.
        Mỗi cổng thanh toán (PayPal, Stripe) chịu trách nhiệm riêng cho logic của nó.
        Open/Closed Principle (OCP):

        Khi cần thêm một cổng thanh toán mới (ví dụ: VNPay), chỉ cần tạo một lớp mới (VNPayGateway) triển khai PaymentGatewayInterface mà không sửa mã gốc.
        Liskov Substitution Principle (LSP):

        Các lớp con (PayPalGateway, StripeGateway) có thể thay thế PaymentGatewayInterface mà không làm thay đổi hành vi của hệ thống.
        Interface Segregation Principle (ISP):

        Giao diện PaymentGatewayInterface được thiết kế gọn gàng chỉ với một phương thức charge, không ép buộc các lớp triển khai thêm phương thức không cần thiết.
        Dependency Inversion Principle (DIP):

        PaymentService không phụ thuộc trực tiếp vào các lớp PayPalGateway hay StripeGateway, mà phụ thuộc vào giao diện PaymentGatewayInterface. Điều này đảm bảo tính linh hoạt khi thêm hoặc thay đổi cổng thanh toán.
     */
    public function processPayment(Request $request)
    {
        $validatedData = $request->validate([
            'amount'  => 'required|numeric|min:1',
            'gateway' => 'required|string|in:paypal,stripe',
        ]);

        // Chọn cổng thanh toán dựa trên input
        $gateway = match ($validatedData['gateway']) {
            'paypal' => new PayPalGateway(),
            'stripe' => new StripeGateway(),
        };

        // Sử dụng dịch vụ thanh toán
        $paymentService = new PaymentService($gateway);

        $result = $paymentService->processPayment($validatedData['amount']);

        return response()->json($result);
    }
}
