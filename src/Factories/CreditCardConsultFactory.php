<?php

namespace Braspag\Factories;

use Braspag\Http\Requests\CreditCardRequest;
use StdClass;

/**
 *
 */
class CreditCardConsultFactory
{
    /**
     * @param CreditCardRequest $creditCardRequest
     * @return array
     */
    public function make(CreditCardRequest $creditCardRequest)
    {
        return [
            'PaymentId' => $this->makePaymentId($creditCardRequest->getPaymentEntity())
        ];
    }

    /**
     * @param $payment
     * @return mixed
     */
    private function makePaymentId($payment)
    {
        return $payment->getPaymentId();
    }
}
