<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:23
 */

namespace Braspag\Factories\MerchantOrder;

/**
 *
 */
class MerchantOrderFactory
{
    /**
     * @param $merchantOrder
     * @return mixed
     */
    public function make($merchantOrder)
    {
        return $merchantOrder->getMerchantOrderId();
    }
}
