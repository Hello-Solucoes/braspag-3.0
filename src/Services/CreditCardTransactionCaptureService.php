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

        $response = $this->client->put('/v2/sales/'.$request['PaymentId'].'/capture', [], []);

        return $response;
    }
}