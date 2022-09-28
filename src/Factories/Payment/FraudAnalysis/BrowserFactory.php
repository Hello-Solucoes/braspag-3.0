<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:38
 */

namespace Braspag\Factories\Payment\FraudAnalysis;

/**
 *
 */
class BrowserFactory
{
    /**
     * @param $browser
     * @return array
     */
    public function make($browser)
    {
        return [
            'CookiesAccepted' => $browser->getCookiesAccepted(),
            'Email' => $browser->getCookiesAccepted(),
            'HostName' => $browser->getHostName(),
            'IpAddress' => $browser->getIpAddress(),
            'Type' => $browser->getType(),
        ];
    }
}
