<?php

namespace Braspag\Factories;

use Braspag\Factories\Customer\CustomerFactory;
use Braspag\Factories\MerchantOrder\MerchantOrderFactory;
use Braspag\Factories\Payment\PaymentFactory;
use Braspag\Http\Requests\CreditCardRequest;

/**
 *
 */
class CreditCardTransactionFactory
{
    /**
     * @param CreditCardRequest $creditCardRequest
     * @return array
     */
    public function make(CreditCardRequest $creditCardRequest)
    {
        return [
            'MerchantOrderId' => $this->makeMerchantOrder($creditCardRequest->getMerchantOrderIdEntity()),
            'Customer' => $this->makeCustomer($creditCardRequest->getCustomerEntity()),
            'Payment' => $this->makePayment($creditCardRequest->getPaymentEntity()),
        ];
    }

    /**
     * @param $merchantOrder
     * @return mixed
     */
    private function makeMerchantOrder($merchantOrder)
    {
        return app(MerchantOrderFactory::class)->make($merchantOrder);
    }

    /**
     * @param $customer
     * @return array
     */
    private function makeCustomer($customer)
    {
        return app(CustomerFactory::class)->make($customer);
    }

    /**
     * @param $payment
     * @return array
     */
    private function makePayment($payment)
    {
        return app(PaymentFactory::class)->make($payment);
    }
}
