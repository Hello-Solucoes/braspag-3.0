<?php

namespace Braspag\Services;

use Braspag\Clients\BraspagClient;
use Braspag\Config;
use Braspag\Factories\CreditCardTransactionCancellationFactory;
use Braspag\Factories\CreditCardTransactionConsultFactory;
use Braspag\Requests\CreditCardRequest;

class CreditCardTransactionCancellationService
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


    public function cancellation(CreditCardRequest $cardRequest)
    {

        $creditCardCancellationFactory = new CreditCardTransactionCancellationFactory($cardRequest);
        $request = (array) $creditCardCancellationFactory->make();
        $this->resquest_json = $request;

        $paymentId = $request['PaymentId'];
        unset($request['PaymentId']);

        $response = $this->client->put('/v2/sales/'.$paymentId.'/void?', $request, [], []);
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