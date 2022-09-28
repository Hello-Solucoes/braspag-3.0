<?php


namespace Braspag\Entities;


class CreditCardEntity
{
    /**
     * @var $cardNumber
     */
    private $cardNumber;

    /**
     * @var $holder
     */
    private $holder;

    /**
     * @var $expirationDate
     */
    private $expirationDate;

    /**
     * @var $securityCode
     */
    private $securityCode;

    /**
     * @var $brand
     */
    private $brand;

    /**
     * @var $saveCard
     */
    private $saveCard;

    /**
     * @var $alias
     */
    private $alias;

    /**
     * @var $cardOnFile
     */
    private $cardOnFile;

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param mixed $holder
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * @param mixed $securityCode
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaveCard()
    {
        return $this->saveCard;
    }

    /**
     * @param mixed $saveCard
     */
    public function setSaveCard($saveCard)
    {
        $this->saveCard = $saveCard;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardOnFile()
    {
        return $this->cardOnFile;
    }

    /**
     * @param mixed $cardOnFile
     */
    public function setCardOnFile($cardOnFile)
    {
        $this->cardOnFile = $cardOnFile;
        return $this;
    }
}
