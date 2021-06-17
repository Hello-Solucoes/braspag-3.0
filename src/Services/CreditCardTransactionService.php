<?php 


namespace Braspag\Services;

use Braspag\Requests\CreditCardRequest;
use Braspag\Factories\CreditCardTransactionFactory;
use Braspag\Clients\BraspagClient;

class CreditCardTransactionService
{
    private $config;

    function __construct( array $config )
    {

        $this->config = $config;

    }

	public function run(CreditCardRequest $creditCardRequest)
	{
        $creditCardFactory = new CreditCardTransactionFactory($creditCardRequest);
        $request = (array) $creditCardFactory->make();

        $client = new BraspagClient($this->config);

		$response = $client->post('/v2/sales',$request, [], []);

		return $response;
	}

    public function consult($paymentId)
    {
        $client = new BraspagClient();
        $response = $client->get('/v2/sales/'.$paymentId, [], []);

        return $response;
    }

	public function cancellation($paymentId, $amount)
    {
        $client = new BraspagClient();
        $response = $client->put('/v2/sales/'.$paymentId.'/void?amount='.$amount, [], []);

        return $response;
    }
}



