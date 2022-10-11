<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 03/10/2022
 * Time: 12:28
 */

namespace BraspagApi\Http\Controllers;

/**
 *
 */
class BaseController
{
    /**
     * @var
     */
    protected $service;

    /**
     * @param $only
     * @return mixed
     */
    public function log($only = false)
    {
        return $this->service->log($only);
    }
}
