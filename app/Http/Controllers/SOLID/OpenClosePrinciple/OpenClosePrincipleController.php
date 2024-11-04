<?php

namespace App\Http\Controllers\SOLID\OpenClosePrinciple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OpenClosePrincipleController extends Controller
{
    public function get(){
        // Sử dụng ShippingService với TruckShipping
        $truckShipping = new TruckShipping();
        $shippingService = new ShippingService($truckShipping);
        echo $shippingService->calculate(100); // Output: 150
        // Sử dụng ShippingService với TrainShipping
        $trainShipping = new TrainShipping();
        $shippingService = new ShippingService($trainShipping);
        echo $shippingService->calculate(100); // Output: 120

        $airShipping = new AirShipping();
        $shippingService = new ShippingService($airShipping);
        echo  $shippingService->calculate(100);
    }
}
