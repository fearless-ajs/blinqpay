<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::post('/transact', [TransactionController::class, 'store']);

Route::get('/hello', function () {
    return ['message' => 'Hello, API!'];
});
