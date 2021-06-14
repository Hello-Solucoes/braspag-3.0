<?php

namespace braspag;

use braspag\Requests\CreditCardRequest;

class CreditCardTransaction 
{
	
	function __construct()
	{	

	}	

	public function make(CreditCardRequest $creditCardRequest)
	{

		return" transação aprovada";

	}
}

