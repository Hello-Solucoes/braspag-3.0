<?php

namespace Braspag\Services;

use Braspag\Factories\AntiFraudFactory;
use Braspag\Http\Requests\AntiFraudRequest;

/**
 *
 */
class AntiFraudService extends BaseService
{
    /**
     * @param AntiFraudRequest $antiFraudeRequest
     * @return mixed|null
     */
    public function antiFraude(AntiFraudRequest $antiFraudeRequest)
    {
        $this->resquest_json = (new AntiFraudFactory)->make($antiFraudeRequest);
        $this->response_json = $this->client->antiFraud($this->resquest_json);
        return $this->response_json;
    }
}
