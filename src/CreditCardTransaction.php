<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionService;

class CreditCardTransaction 
{
	
	private $creditCardTransactionService;

	function __construct()
	{	
		$this->creditCardTransactionService = new CreditCardTransactionService;
	}	

	public function make(CreditCardRequest $creditCardRequest)
	{
	    $creditCardTransaction = $this->creditCardTransactionService->run($creditCardRequest);
        return $creditCardTransaction;
	}

    public function makeConsult($paymentId)
    {
        $creditCardTransaction = $this->creditCardTransactionService->consult($paymentId);
        return $creditCardTransaction;
    }

    public function makeCancellation($paymentId, $amount)
    {
        $creditCardTransaction = $this->creditCardTransactionService->cancellation($paymentId, $amount);
        return $creditCardTransaction;
    }
}

