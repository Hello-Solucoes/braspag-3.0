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
     * @param Config $config
     */
	function __construct(Config $config )
	{
		$this->httpClient = new Client([
			'base_uri' => $config->currentEnv()
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

    private function bodies( $method, $headers, $request )
    {
            if ($method == 'POST'){

                return [
                    'headers' => array_merge($headers, $this->headers()),
                    'json' => $request
                ];

            }

            if ($method == 'GET') {
                return [
                    'headers' => array_merge($headers, $this->headers())
                ];
            }

            if ($method == 'PUT') {
                return [
                    'headers' => array_merge($headers, $this->headers()),
                    'query' => $request
                ];
            }


    }


    public function __doRequest($method, $endpoint, $request, $headers, $options)
	{

		try {

		    $body = $this->bodies($method, $headers, $request);

            $response = $this->httpClient->{$method}($endpoint, $body);
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
        return $this->__doRequest('GET', $endpoint, '', $headers, '');
	}

    public function put($endpoint, array $request, array $headers)
    {
        return $this->__doRequest('PUT', $endpoint, $request, $headers, '');
    }

	public function patch()
	{

	}

	public function delete()
	{

	}

}