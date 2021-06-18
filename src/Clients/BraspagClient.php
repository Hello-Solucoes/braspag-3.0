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

    /**
     * @return array
     */
	private function headers()
	{
		return [
			'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
			'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF',
			'RequestId' => rand(0, 1000)
		];
	}

    /**
     * @param $method
     * @param $headers
     * @param $request
     * @return array|void
     */
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

    /**
     * @param $method
     * @param $endpoint
     * @param $request
     * @param $headers
     * @param $options
     * @return mixed|void
     */
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

    /**
     * @param $endpoint
     * @param $request
     * @param array $headers
     * @param array $options
     * @return mixed|void
     */
	public function post($endpoint, $request, array $headers, array $options)
	{
		return $this->__doRequest('POST', $endpoint, $request, $headers, $options);
	}

    /**
     * @param $endpoint
     * @param array $headers
     * @return mixed|void
     */
	public function get($endpoint, array $headers)
	{
        return $this->__doRequest('GET', $endpoint, '', $headers, '');
	}

    /**
     * @param $endpoint
     * @param array $request
     * @param array $headers
     * @return mixed|void
     */
    public function put($endpoint, array $request, array $headers)
    {
        return $this->__doRequest('PUT', $endpoint, $request, $headers, '');
    }

}