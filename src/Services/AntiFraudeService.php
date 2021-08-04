<?php


namespace Braspag\Services;


use Braspag\Clients\BraspagClient;
use Braspag\Config;
use Braspag\Factories\AntifraudeFactory;
use Braspag\Factories\CreditCardTransactionCancellationFactory;
use Braspag\Requests\AntiFraudeRequest;
use Braspag\Requests\CreditCardRequest;

class AntiFraudeService
{
    /**
     * @var BraspagClient
     */

    private $client;

    /**
     * @var $resquest_json
     */

    public $resquest_json;

    /**
     * @var $response_json
     */

    public $response_json;

    /**
     * @param Config $config
     */

    function __construct(Config $config)
    {

        $this->client = new BraspagClient($config);

    }

    public function antiFraude(AntiFraudeRequest $antiFraudeRequest)
    {

        $antiFraudeFactory = new AntifraudeFactory($antiFraudeRequest);
        $request =  (array) $antiFraudeFactory->make();

        $this->resquest_json = $request;

        $response = $this->client->post('/v2/sales', $request, [], []);

        $this->response_json = $response;

        return $response;
    }

    public function log ()
    {
        return [
            'request'=> $this->resquest_json,
            'response'=>  $this->response_json
        ];
    }
}