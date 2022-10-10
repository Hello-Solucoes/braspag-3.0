<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 09:33
 */

namespace BraspagApi\Services;

use BraspagApi\Braspag;

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
     * @param $only
     * @return null
     */
    public function log($only = false)
    {
        switch ($only) {
            default:
                return null;
            case 'request':
                return $this->request;
            case 'response':
                return $this->response;
        }
    }
}
