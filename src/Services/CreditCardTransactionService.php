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

    /**
     * @var $resquest_json
     */
    public $resquest_json;

    /**
     * @var $response_json
     */
    public $response_json;

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
        $this->resquest_json = $request;

		$response = $this->client->post('/v2/sales',$request, [], []);
        $this->response_json = $response;

		return $response;
	}

	public function log ()
    {
        return [
          'request'=> $this->response_json,
          'response'=>  $this->response_json
        ];
    }


}



