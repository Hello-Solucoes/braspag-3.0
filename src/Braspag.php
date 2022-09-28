<?php

namespace Braspag;

use GuzzleHttp\Client;
use Braspag\Exceptions\BraspagException;
use GuzzleHttp\Exception\ClientException;

/**
 *
 */
class Braspag
{
    /**
     * @var Client
     */
    private $httpClient;

    /**
     *
     */
    function __construct()
    {
        $this->httpClient = new Client([
            'base_uri' => $this->makeBaseUri()
        ]);

    }

    /**
     * @param array $data
     * @param array $headers
     * @return mixed
     * @throws BraspagException
     */
    public function antiFraud(array $data, array $headers = [])
    {
        return $this->execute('POST', '/v2/sales', $headers, $data);
    }

    /**
     * @param int $paymentId
     * @param array $headers
     * @return mixed
     * @throws BraspagException
     */
    public function creditCardConsult(int $paymentId, array $headers = [])
    {
        return $this->execute('GET', sprintf('/v2/sales/%s', $paymentId), $headers);
    }

    /**
     * @param array $data
     * @param array $headers
     * @return mixed
     * @throws BraspagException
     */
    public function creditCardTransaction(array $data, array $headers = [])
    {
        return $this->execute('POST', '/v2/sales', $headers, $data);
    }

    /**
     * @param int $paymentId
     * @param array $headers
     * @return mixed
     * @throws BraspagException
     */
    public function creditCardCapture(int $paymentId, array $headers = [])
    {
        return $this->execute('PUT', sprintf('/v2/sales/%s/capture', $paymentId), $headers);
    }

    /**
     * @param int $paymentId
     * @param array $data
     * @param array $headers
     * @return mixed
     * @throws BraspagException
     */
    public function creditCardCancellation(int $paymentId, array $data = [], array $headers = [])
    {
        return $this->execute('PUT', sprintf('/v2/sales/%s/void', $paymentId), $headers, $data);
    }

    /**
     * @return mixed
     */
    private function makeBaseUri()
    {
        return config('braspag_api.only_consulting') ? config('braspag_api.endpoint.consult') : config('braspag_api.endpoint.transaction');
    }

    /**
     * @return array
     */
    private function headers()
    {
        return [
            'MerchantId' => config('braspag_api.merchant_id'),
            'MerchantKey' => config('braspag_api.merchant_key'),
            'RequestId' => rand(0, 1000)
        ];
    }

    /**
     * @param $method
     * @param $headers
     * @param $request
     * @return mixed
     */
    private function makeContent($method, $headers, $request)
    {
        return array_filter([
            'headers' => array_merge($headers, $this->headers()),
            'json' => $method === 'POST' ? $request : '',
            'query' => $method === 'PUT' ? $request : '',
        ]);
    }

    /**
     * @param $method
     * @param $endpoint
     * @param $headers
     * @param $request
     * @param $options
     * @return mixed
     * @throws BraspagException
     */
    private function execute($method, $endpoint, $headers = [], $request = [], $options = [])
    {
        try {
            $response = $this->httpClient->{$method}($endpoint, $this->makeContent($method, $headers, $request));
            return json_decode($response->getBody());
        } catch (ClientException $e) {
            throw new BraspagException($e->getMessage(), $e->getCode(), $e);
        }
    }
}
