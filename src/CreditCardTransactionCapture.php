<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionCaptureService;

class CreditCardTransactionCapture
{

    /**
     * @var CreditCardTransactionCaptureService
     */
    private $creditCardTransactionCaptureService;

    /**
     * @param array $config
     */
    function __construct( array $config )
    {
        $this->config = new Config($config);
        $this->creditCardTransactionCaptureService = new CreditCardTransactionCaptureService($this->config);

    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
    public function makeCapture(CreditCardRequest $creditCardRequest)
    {
        $creditCardTransaction = $this->creditCardTransactionCaptureService->capture($creditCardRequest);
        return $creditCardTransaction;
    }

    /**
     * @return mixed
     */

    public function log ()
    {
        return $this->creditCardTransactionCaptureService->log();
    }
}