<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:37
 */

namespace BraspagApi\Factories\Payment\CreditCard;

/**
 *
 */
class CardOnFileFactory
{
    /**
     * @param $cardOnFile
     * @return array
     */
    public function make($cardOnFile)
    {
        return [
            'Usage' => $cardOnFile->getUsage(),
            'Reason' => $cardOnFile->getReason(),
        ];
    }
}
