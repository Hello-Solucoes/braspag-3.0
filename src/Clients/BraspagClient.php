<?php

namespace Braspag\Clients; 

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class BraspagClient
{

	CONST BASE_URI_HOMOLOG = "https://apisandbox.braspag.com.br";

	CONST BASE_URI_HOMOLOG_CONSULT = 'https://apiquerysandbox.braspag.com.br/';

	CONST BASE_URI_PROD = "https://api.braspag.com.br/";

	CONST BASE_URI_PROD_CONSULT = 'https://apiquery.braspag.com.br/';


    /**
     * @var Client
     */
	private $httpClient;

    /**
     *
     * Constructor method
     * @param array $config
     */
	function __construct()
	{
		$this->httpClient = new Client([
			'base_uri' => self::BASE_URI_HOMOLOG
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
			print_r(json_decode($e->getMessage()));
			echo '</pre> =============================================================='.PHP_EOL;
		}
		

	}

	public function post($endpoint, $request, array $headers, array $options)
	{
		return $this->__doRequest('POST', $endpoint, $request, $headers, $options);
	}

	public function get()
	{

	}

	public function patch()
	{

	}

	public function delete()
	{

	}

}