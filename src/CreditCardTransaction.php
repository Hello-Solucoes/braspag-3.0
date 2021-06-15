<?php

namespace braspag;

use Braspag\Requests\CreditCardRequest;
use Braspag\ValidationRules\CreditCard\ValidationRules;
use Rakit\Validation\Validator;

class CreditCardTransaction 
{
	
	function __construct()
	{	

	}	

	public function make(CreditCardRequest $creditCardRequest)
	{
	    $requestArray['Customer'] = $creditCardRequest->getCustomerEntity();

//        $validator = new Validator;
//        $rules = ValidationRules::makeRules();

//       $validation = $validator->make($creditCardRequest, $rules);
//        $validation->validate();
//        print_r($validation);
//
		return" transação aprovada";

	}
}

