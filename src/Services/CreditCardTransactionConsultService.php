<?php

namespace Braspag\Services;

use Braspag\Clients\BraspagClient;
use Braspag\Config;
use Braspag\Factories\CreditCardTransactionConsultFactory;
use Braspag\Requests\CreditCardRequest;

class CreditCardTransactionConsultService
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

    public function consult(CreditCardRequest $creditCardRequest)
    {
        $creditCardConsultFactory = new CreditCardTransactionConsultFactory($creditCardRequest);
        $request = (array) $creditCardConsultFactory->make();

        $response = $this->client->get('/v2/sales/'.$request['PaymentId'], [], []);

        return $response;
    }
}