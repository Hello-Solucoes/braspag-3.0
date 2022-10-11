<?php

namespace BraspagApi\Http\Controllers;

use BraspagApi\Http\Requests\AntiFraudRequest;
use BraspagApi\Services\AntiFraudService;

/**
 *
 */
class AntiFraud extends BaseController
{
    /**
     *
     */
    function __construct()
    {
        $this->service = new AntiFraudService();
    }

    /**
     * @param AntiFraudRequest $antiFraudeRequest
     * @return mixed|null
     */
    public function make(AntiFraudRequest $antiFraudeRequest)
    {
        return $this->service->analyse($antiFraudeRequest);
    }
}

