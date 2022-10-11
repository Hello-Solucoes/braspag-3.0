<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:29
 */

namespace BraspagApi\Factories\Payment;

/**
 *
 */
class ExtraCollectionFactory
{
    /**
     * @param $extraDataCollection
     * @return array
     */
    public function make($extraDataCollection)
    {
        return [
            'Name' => $extraDataCollection->getName(),
            'Value' => $extraDataCollection->getValue(),
        ];
    }
}
