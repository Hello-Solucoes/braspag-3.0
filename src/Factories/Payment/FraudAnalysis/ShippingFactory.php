<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:42
 */

namespace Braspag\Factories\Payment\FraudAnalysis;

/**
 *
 */
class ShippingFactory
{
    /**
     * @param $shipping
     * @return array
     */
    public function make($shipping)
    {
        return [
            'Addressee' => $shipping->getAddressee(),
            'Method' => $shipping->getMethod(),
            'Phone' => $shipping->getPhone(),
        ];
    }
}
