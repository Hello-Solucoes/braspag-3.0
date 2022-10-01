<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:34
 */

namespace Braspag\Factories\Payment;

use Braspag\Factories\Payment\CreditCard\CardOnFileFactory;

/**
 *
 */
class CreditCardFactory
{
    /**
     * @param $creditCard
     * @return array
     */
    public function make($creditCard)
    {
        $response = [
            'CardNumber' => $creditCard->getCardNumber(),
            'Holder' => $creditCard->getHolder(),
            'ExpirationDate' => $creditCard->getExpirationDate(),
            'SecurityCode' => $creditCard->getSecurityCode(),
            'Brand' => $creditCard->getBrand(),
            'SaveCard' => $creditCard->getSaveCard(),
            'Alias' => $creditCard->getAlias(),
        ];

        if (!empty($creditCard->getCardOnFile())) {
            $response['CardOnFile'] = $this->makeCardOnFile($creditCard->getCardOnFile());
        }

        return $response;
    }

    /**
     * @param $cardOnFile
     * @return array
     */
    private function makeCardOnFile($cardOnFile)
    {
        return (new CardOnFileFactory)->make($cardOnFile);
    }
}
