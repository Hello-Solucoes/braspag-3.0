<?php

namespace BraspagApi\Factories;

use BraspagApi\Factories\Customer\CustomerFactory;
use BraspagApi\Factories\MerchantOrder\MerchantOrderFactory;
use BraspagApi\Factories\Payment\PaymentFactory;
use BraspagApi\Http\Requests\AntiFraudRequest;

/**
 *
 */
class AntiFraudFactory
{
    /**
     * @param AntiFraudRequest $antiFraudeRequest
     * @return array
     */
    public function make(AntiFraudRequest $antiFraudeRequest)
    {
        return [
            'MerchantOrderId' => $this->makeMerchantOrder($antiFraudeRequest->getMerchantOrderIdEntity()),
            'Customer' => $this->makeCustomer($antiFraudeRequest->getCustomerEntity()),
            'Payment' => $this->makePayment($antiFraudeRequest->getPaymentEntity()),
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
