<?php

namespace BraspagApi\Services;

use BraspagApi\Factories\AntiFraudFactory;
use BraspagApi\Http\Requests\AntiFraudRequest;

/**
 *
 */
class AntiFraudService extends BaseService
{
    /**
     * @param AntiFraudRequest $antiFraudeRequest
     * @return mixed|null
     */
    public function analyse(AntiFraudRequest $antiFraudeRequest)
    {
        $this->request = (new AntiFraudFactory)->make($antiFraudeRequest);
        $this->response = $this->client->antiFraud($this->request);
        return $this->response;
    }
}
