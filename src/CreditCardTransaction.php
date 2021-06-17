<?php

namespace Braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\Services\CreditCardTransactionService;

class CreditCardTransaction 
{
	
	private $creditCardTransactionService;

	function __construct( array $config )
	{
        $this->config = new Config($config['production']);
        print_r($this->config->currentEnv());
        exit();


		$this->creditCardTransactionService = new CreditCardTransactionService($config);

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

