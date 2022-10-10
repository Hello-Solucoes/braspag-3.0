<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:28
 */

namespace BraspagApi\Factories\Payment;

/**
 *
 */
class CredentialFactory
{
    /**
     * @param $credential
     * @return array
     */
    public function make($credential)
    {
        return [
            'Code' => $credential->getCode(),
            'Key' => $credential->getKey(),
            'Password' => $credential->getPassword(),
            'Username' => $credential->getUsername(),
            'Signature' => $credential->getSignature(),
        ];

    }
}
