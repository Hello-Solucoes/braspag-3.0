<?php

namespace BraspagApi\Factories;

use BraspagApi\Http\Requests\CreditCardRequest;

/**
 *
 */
class CreditCardCancellationFactory
{
    /**
     * @param CreditCardRequest $creditCardRequest
     * @return array
     */
    public function make(CreditCardRequest $creditCardRequest)
    {
        return $this->makePayment($creditCardRequest->getPaymentEntity());
    }

    /**
     * @param $payment
     * @return mixed
     */
    private function makePayment($payment)
    {
        return [
            'PaymentId' => $payment->getPaymentId(),
            'Amount' => $payment->getAmount(),
        ];
    }
}
