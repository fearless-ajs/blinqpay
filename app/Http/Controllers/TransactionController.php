<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentRequest;
use App\Http\Services\StripeProcessor;
use Fearless\SmartPaymentRouting\core\adapter\ProcessorManager;
use Fearless\SmartPaymentRouting\core\PaymentRoutingService;
use Fearless\SmartPaymentRouting\core\processors\FlutterwaveProcessor;
use Fearless\SmartPaymentRouting\core\processors\PaystackProcessor;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
        private readonly ProcessorManager $processorManager;

    public function __construct(ProcessorManager $processorManager)
    {
        $this->processorManager = $processorManager;
        // Register the processor for transactions within this class
        $processorManager->initialize([
            [
                'name' => 'paystack',
                'processor' => new PaystackProcessor(),
            ],
            [
                'name'  => 'flutterwave',
                'processor' => new FlutterwaveProcessor(),
            ],
            [
                'name'  => 'stripe',
                'processor' => new StripeProcessor(),
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePaymentRequest $request)
    {

        // Initialize the payment routing service
        $paymentRoutingService = new PaymentRoutingService($this->processorManager);
        $transaction = [
            'user_email' => $request->get('email'),
            'amount' => $request->get('amount'),
            'currency' => $request->get('currency'),
        ];

        // Route transaction to the best processor
        return $paymentRoutingService->makeCharge($this->processorManager, $transaction);
    }

}
