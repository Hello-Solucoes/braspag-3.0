<?php

namespace BraspagApi\Http\Controllers;

use BraspagApi\Http\Requests\CreditCardRequest;
use BraspagApi\Services\CreditCardService;

/**
 *
 */
class CreditCardTransaction extends BaseController
{
    /**
     *
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
}

