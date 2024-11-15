<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('export-sound', [App\Http\Controllers\OOP\Abstraction\AbstractionController::class, 'exportSound']);
Route::get('use-person', [\App\Http\Controllers\OOP\Encapsulation\EncapsulationController::class, 'usePerson']);
Route::get('test', [\App\Http\Controllers\ImportantDesignPattern\InitiationGroup\Builder\TestController::class, 'get']);
Route::post('solid-process-payment', [\App\Http\Controllers\SOLID\PaymentController::class, 'processPayment']);
