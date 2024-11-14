<?php

namespace App\Http\Controllers\SOLID\OpenClosePrinciple;

use App\Http\Controllers\Controller;
use App\Services\Payment\PaymentGatewayInterface;
use App\Services\Payment\PayPalGateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //Class nên mở để mở rộng nhưng đóng với sửa đổi. Điều này có nghĩa là bạn nên có thể mở rộng tính năng của class mà không cần thay đổi mã nguồn của nó.
    //
    //Ví dụ:
    //Giả sử bạn có một hệ thống thanh toán và muốn thêm nhiều phương thức thanh toán.
    // Thay vì thay đổi logic trong class xử lý thanh toán chính, bạn có thể tạo các class riêng biệt cho từng phương thức thanh toán và dùng Dependency Injection.
    //http://yourapp.com/payment/pay/100?payment_method=paypal

    protected $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function pay($amount){
        $payPalPayment = new PayPalGateway();
        $this->paymentGateway->charge($amount);
        return response()->json(['message' => 'Payment processed successfully']);
    }
}
