<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentRequest;
use Fearless\SmartPaymentRouting\core\adapter\ProcessorManager;
use Fearless\SmartPaymentRouting\core\PaymentRoutingService;
use Fearless\SmartPaymentRouting\core\processors\FlutterwaveProcessor;
use Fearless\SmartPaymentRouting\core\processors\PaystackProcessor;
use Fearless\SmartPaymentRouting\core\processors\StripeProcessor;
use Fearless\SmartPaymentRouting\Facades\SmartPaymentRouting;
use Fearless\SmartPaymentRouting\providers\SmartPaymentRoutingServiceProvider;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
//    private readonly ProcessorManager $processorManager;
//
//    public function __construct()
//    {
////        $this->processorManager = new ProcessorManager();
////        // Register the processor for transactions within this class
////        $this->processorManager->initialize([
////            [
////                'name' => 'paystack',
////                'processor' => new PaystackProcessor(),
////            ],
////            [
////                'name'  => 'flutterwave',
////                'processor' => new FlutterwaveProcessor(),
////            ]
////        ]);
//    }

    public function makePayment(CreatePaymentRequest $request): mixed
    {
//        // Initialize the payment routing service
//        $paymentRoutingService = new PaymentRoutingService($this->processorManager);
//        $transaction = [
//            'user_email' => $request->get('email'),
//            'amount' => $request->get('amount'),
//            'currency' => $request->get('currency'),
//        ];
//
//        // Route transaction to the best processor
//        return $paymentRoutingService->makeCharge($this->processorManager, $transaction);
    }
}
