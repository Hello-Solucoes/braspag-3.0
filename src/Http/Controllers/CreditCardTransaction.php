<?php

namespace Braspag\Http\Controllers;

use Braspag\Config;
use Braspag\Http\Requests\CreditCardRequest;
use Braspag\Services\CreditCardService;

/**
 *
 */
class CreditCardTransaction
{

    /**
     * @var CreditCardService
     */
    private $service;

    /**
     * @param array $config
     */
    function __construct()
    {
        $this->service = new CreditCardService();
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     */
    public function consult(CreditCardRequest $creditCardRequest)
    {
        return $this->service->consult($creditCardRequest);
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed|void
     */
    public function transaction(CreditCardRequest $creditCardRequest)
    {
        return $this->service->transaction($creditCardRequest);
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     */
    public function capture(CreditCardRequest $creditCardRequest)
    {
        return $this->service->capture($creditCardRequest);
    }

    /**
     * @param CreditCardRequest $creditCardRequest
     * @return mixed
     */
    public function cancellation(CreditCardRequest $creditCardRequest)
    {
        return $this->service->cancellation($creditCardRequest);
    }

    /**
     * @return array
     */
    public function log()
    {
        return $this->service->log();
    }
}

