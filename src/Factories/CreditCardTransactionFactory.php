<?php 

namespace Braspag\Factories; 

use Braspag\Requests\CreditCardRequest;

class CreditCardTransactionFactory
{


	function __construct(CreditCardRequest $creditCardRequest)
	{
		var_dump(json_encode((object) $creditCardRequest));
	}
}
