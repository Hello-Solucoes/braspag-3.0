<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionCancellationService;

class CreditCardTransactionCancellation
{
    /**
     * @var CreditCardTransactionCancellationService
     */
    private $creditCardTransactionCancellationService;

    /**
     * @param array $config
     */
    function __construct( array $config )
    {
        $this->config = new Config($config);
        $this->creditCardTransactionCancellationService = new CreditCardTransactionCancellationService($this->config);

    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
    public function make(CreditCardRequest $creditCardRequest)
    {
        $creditCardTransactionCancellationService = $this->creditCardTransactionCancellationService->cancellation($creditCardRequest);
        return $creditCardTransactionCancellationService;
    }

}