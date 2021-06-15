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
        $request = json_encode($creditCardFactory->make());
        print_r($request);
        $client = new BraspagClient();
		$client->post('/v2/sales',$request, [], []);

	}
}



