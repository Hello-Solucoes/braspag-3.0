<?php


namespace Braspag\Entities;


class CryptoCurrencyEntity
{
    private $isCryptoCurrencyNegotiation;

    /**
     * @return mixed
     */
    public function getIsCryptoCurrencyNegotiation()
    {
        return $this->isCryptoCurrencyNegotiation;
    }

    /**
     * @param mixed $isCryptoCurrencyNegotiation
     */
    public function setIsCryptoCurrencyNegotiation($isCryptoCurrencyNegotiation)
    {
        $this->isCryptoCurrencyNegotiation = $isCryptoCurrencyNegotiation;
    }

}