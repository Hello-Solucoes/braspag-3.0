<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionConsultService;

class CreditCardTransactionConsult
{
    /**
     * @var CreditCardTransactionConsultService
     */
    private $creditCardTransactionConsultService;

    /**
     * @param array $config
     */
    function __construct( array $config )
    {
        $this->config = new Config($config);
        $this->creditCardTransactionConsultService = new CreditCardTransactionConsultService($this->config);

    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
    public function make(CreditCardRequest $creditCardRequest)
    {
        $creditCardTransactionService = $this->creditCardTransactionConsultService->consult($creditCardRequest);
        return $creditCardTransactionService;
    }

    /**
     * @return mixed
     */

    public function log ()
    {
        return $this->creditCardTransactionConsultService->log();
    }

}