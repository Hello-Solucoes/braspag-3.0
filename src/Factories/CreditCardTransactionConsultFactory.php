<?php 

namespace Braspag\Factories; 

use Braspag\Requests\CreditCardRequest;
use \StdClass;

class CreditCardTransactionConsultFactory
{
    /**
     * @var CreditCardRequest
     */
    private $creditCardRequest;

    /**
     * @param CreditCardRequest $creditCardRequest
     */
    function __construct(CreditCardRequest $creditCardRequest)
    {

        $this->creditCardRequest = $creditCardRequest;

    }

    /**
     * @return StdClass
     */
    public function make()
    {
        $std = new StdClass();

        $std = $this->makePaymentId($this->creditCardRequest->getPaymentEntity());

        return $std;

    }

    /**
     * @param $paymentObj
     * @return StdClass
     */
    private function makePaymentId($paymentObj)
    {
        $std = new StdClass();

        $std->PaymentId = $paymentObj->getPaymentId();

        return $std;
    }

}
