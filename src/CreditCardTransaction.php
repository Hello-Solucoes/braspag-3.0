<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionService;

class CreditCardTransaction 
{

    /**
     * @var CreditCardTransactionService
     */
    private $creditCardTransactionService;

    /**
     * @param array $config
     */
	function __construct( array $config )
	{
        $this->config = new Config($config);
		$this->creditCardTransactionService = new CreditCardTransactionService($this->config);

	}

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
	public function make(CreditCardRequest $creditCardRequest)
	{
	    $creditCardTransaction = $this->creditCardTransactionService->run($creditCardRequest);
        return $creditCardTransaction;
	}

    /**
     * @param $paymentId
     * @return mixed|void
     */
    public function makeConsult($paymentId)
    {
        $creditCardTransaction = $this->creditCardTransactionService->consult($paymentId);
        return $creditCardTransaction;
    }

    /**
     * @param $paymentId
     * @param $amount
     * @return mixed|void
     */
    public function makeCancellation($paymentId, $amount)
    {
        $creditCardTransaction = $this->creditCardTransactionService->cancellation($paymentId, $amount);
        return $creditCardTransaction;
    }
}

