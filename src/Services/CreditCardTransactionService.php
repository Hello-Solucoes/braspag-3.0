<?php 


namespace Braspag\Services;

use Braspag\Requests\CreditCardRequest;
use Braspag\Factories\CreditCardTransactionFactory;
use Braspag\Clients\BraspagClient;
use Braspag\Config;

class CreditCardTransactionService
{

    /**
     * @var BraspagClient
     */

    private $client;

    /**
     * @param Config $config
     */

    function __construct(Config $config)
    {

        $this->client = new BraspagClient($config);

    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
	public function run(CreditCardRequest $creditCardRequest)
	{
        $creditCardFactory = new CreditCardTransactionFactory($creditCardRequest);
        $request = (array) $creditCardFactory->make();

		$response = $this->client->post('/v2/sales',$request, [], []);

		return $response;
	}

    /**
     * @param $paymentId
     * @return mixed|void
     */
    public function consult($paymentId)
    {

        $response = $this->client->get('/v2/sales/'.$paymentId, [], []);

        return $response;
    }

    /**
     * @param $paymentId
     * @param $amount
     * @return mixed|void
     */
	public function cancellation($paymentId, $amount)
    {

        $response = $this->client->put('/v2/sales/'.$paymentId.'/void?', $amount, [], []);

        return $response;
    }
}



