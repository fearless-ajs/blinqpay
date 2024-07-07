<?php

namespace App\Http\Services;

use Fearless\SmartPaymentRouting\core\contract\PaymentProcessor;
use GuzzleHttp\Exception\GuzzleException;
use MusahMusah\LaravelMultipaymentGateways\Exceptions\HttpMethodFoundException;
use MusahMusah\LaravelMultipaymentGateways\Exceptions\InvalidConfigurationException;
use Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException;

class StripeProcessor implements PaymentProcessor
{
    public function createPayment($user_email, $amount, $currency)
    {
        $priceId = 'price_1PSr3AI3O5RZUfSqiQE2g0QX';

        try {

            $stripe = new \Stripe\StripeClient(getenv('STRIPE_SECRET'));
           return $stripe->checkout->sessions->create([
                'success_url' => 'https://example.com/success',
                'line_items' => [
                    [
                        'price' => $priceId,
                        'quantity' => 2,
                    ],
                ],
                'mode' => 'payment',
            ]);
        } catch (GuzzleException|HttpMethodFoundException|InvalidConfigurationException $e) {
            throw new NotAcceptableHttpException($e->getMessage());
        }
    }
}
