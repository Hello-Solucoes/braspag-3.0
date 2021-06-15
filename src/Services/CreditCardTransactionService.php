<?php 


namespace Braspag\Services;

use Braspag\Requests\CreditCardRequest;
use Braspag\Factories\CreditCardTransactionFactory;
use Braspag\Clients\BraspagClient;

class CreditCardTransactionService
{

	public function run(CreditCardRequest $creditCardRequest)
	{

		$client = new BraspagClient();
		$client->post('/v2/sales',$creditCardRequest, [], []);

	}
}



