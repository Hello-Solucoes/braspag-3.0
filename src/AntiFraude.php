<?php

namespace Braspag;

use Braspag\Requests\AntiFraudeRequest;
use Braspag\Services\AntiFraudeService;
use Braspag\Config;

class AntiFraude
{

    /**
     * @var AntiFraudeService
     */
    private $antiFraudeService;

    /**
     * @param array $config
     */
	function __construct( array $config )
	{
        $this->config = new Config($config);
		$this->antiFraudeService = new AntiFraudeService($this->config);

	}

    /**
     * @param AntiFraudeRequest $antiFraudeRequest
     * @return mixed|void
     */
	public function make(AntiFraudeRequest $antiFraudeRequest)
	{
	    $antiFraude = $this->antiFraudeService->antiFraude($antiFraudeRequest);
        return $antiFraude;
	}

	public function log ()
    {
        return $this->antiFraudeService->log();
    }

}

