<?php

namespace Braspag\Services;

use Braspag\Clients\BraspagClient;
use Braspag\Config;
use Braspag\Factories\CreditCardCaptureTransactionFactory;
use Braspag\Requests\CreditCardRequest;

class CreditCardTransactionCaptureService
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

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */

    public function capture(CreditCardRequest $creditCardRequest)
    {
        $creditCardCaptureTransactionFactory = new CreditCardCaptureTransactionFactory($creditCardRequest);
        $request = (array) $creditCardCaptureTransactionFactory->make();
        $this->resquest_json = $request;

        $response = $this->client->put('/v2/sales/'.$request['PaymentId'].'/capture', [], []);
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