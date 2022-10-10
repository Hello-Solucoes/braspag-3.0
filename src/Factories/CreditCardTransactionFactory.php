<?php

namespace BraspagApi\Factories;

use BraspagApi\Factories\Customer\CustomerFactory;
use BraspagApi\Factories\MerchantOrder\MerchantOrderFactory;
use BraspagApi\Factories\Payment\PaymentFactory;
use BraspagApi\Http\Requests\CreditCardRequest;

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
        return (new MerchantOrderFactory)->make($merchantOrder);
    }

    /**
     * @param $customer
     * @return array
     */
    private function makeCustomer($customer)
    {
        return (new CustomerFactory)->make($customer);
    }

    /**
     * @param $payment
     * @return array
     */
    private function makePayment($payment)
    {
        return (new PaymentFactory)->make($payment);
    }
}
