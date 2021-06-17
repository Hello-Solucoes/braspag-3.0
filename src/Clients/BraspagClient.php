<?php

namespace Braspag\Clients; 

use Braspag\Config;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class BraspagClient
{




    /**
     * @var Client
     */
	private $httpClient;

    /**
     * @var
     */
	private $config;

    /**
     *
     * Constructor method
     * @param array $config
     */
	function __construct( array $config )
	{


	    $this->config = $config ?? $this->config['production']  = 0;

		$this->httpClient = new Client([
			'base_uri' => ($this->config['production'] == true)? Config::BASE_URI_HOMOLOG : Config::BASE_URI_PROD
		]);

	}

	private function headers()
	{
		return [
			'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
			'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF',
			'RequestId' => rand(0, 1000)
		];
	}


	public function __doRequest($method, $endpoint, $request, $headers, $options)
	{

		try {
			$response = $this->httpClient->{$method}($endpoint, [
				'headers' => array_merge($headers, $this->headers()),
				'json' => $request
			]);
			return json_decode($response->getBody());
					
		} catch (\GuzzleHttp\Exception\ClientException $e ) {
			echo '<pre> =============================================================='.PHP_EOL;
			print_r($e->getMessage());
			echo '</pre> =============================================================='.PHP_EOL;
		}
		

	}

	public function post($endpoint, $request, array $headers, array $options)
	{
		return $this->__doRequest('POST', $endpoint, $request, $headers, $options);
	}

	public function get($endpoint, array $headers)
	{
        $this->httpClient = new Client([
            'base_uri' => ($this->config['production'] == false)? Config::BASE_URI_HOMOLOG_CONSULT : Config::BASE_URI_PROD_CONSULT
        ]);
        return $this->__doRequest('GET', $endpoint, '', $headers, '');
	}

    public function put($endpoint, array $headers)
    {
        return $this->__doRequest('PUT', $endpoint, '', $headers, '');
    }

	public function patch()
	{

	}

	public function delete()
	{

	}

}