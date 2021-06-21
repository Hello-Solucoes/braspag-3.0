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
        $paymentId = $request['PaymentId'];
        unset($request['PaymentId']);

        $response = $this->client->put('/v2/sales/'.$paymentId.'/void?', $request, [], []);

        return $response;
    }

}