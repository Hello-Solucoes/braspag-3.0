<?php

namespace Braspag\Http\Controllers;

use Braspag\Http\Requests\AntiFraudRequest;
use Braspag\Services\AntiFraudService;

/**
 *
 */
class AntiFraud
{
    /**
     * @var AntiFraudService
     */
    private $service;

    /**
     * @param array $config
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
        return $this->service->antiFraude($antiFraudeRequest);
    }

    /**
     * @return array
     */
    public function log()
    {
        return $this->service->log();
    }
}

