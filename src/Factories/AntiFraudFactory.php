<?php

namespace Braspag\Factories;

use Braspag\Factories\Customer\CustomerFactory;
use Braspag\Factories\MerchantOrder\MerchantOrderFactory;
use Braspag\Factories\Payment\PaymentFactory;
use Braspag\Http\Requests\AntiFraudRequest;

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
