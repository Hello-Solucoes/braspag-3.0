<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 09:33
 */

namespace Braspag\Services;

use Braspag\Braspag;

/**
 *
 */
class BaseService
{
    /**
     * @var Braspag
     */
    protected $client;

    /**
     * @var
     */
    public $request;

    /**
     * @var
     */
    public $response;

    /**
     *
     */
    public function __construct()
    {
        $this->client = new Braspag();
    }

    /**
     * @return array
     */
    public function log()
    {
        return [
            'request' => $this->request,
            'response' => $this->response
        ];
    }
}
