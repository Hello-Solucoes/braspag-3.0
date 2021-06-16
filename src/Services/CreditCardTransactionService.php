<?php 


namespace Braspag\Services;

use Braspag\Requests\CreditCardRequest;
use Braspag\Factories\CreditCardTransactionFactory;
use Braspag\Clients\BraspagClient;

class CreditCardTransactionService
{

	public function run(CreditCardRequest $creditCardRequest)
	{
        $creditCardFactory = new CreditCardTransactionFactory($creditCardRequest);
        $request = (array) $creditCardFactory->make();

        $client = new BraspagClient();
		$response = $client->post('/v2/sales',$request, [], []);
		print_r($response);


	}
}



