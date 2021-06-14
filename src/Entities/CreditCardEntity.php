<?php


namespace Braspag\Entities;


class CreditCardEntity
{
    private $cardNumber;
    private $holder;
    private $expirationDate;
    private $securityCode;
    private $brand;
    private $cardOnFile;
    private $saveCard;
    private $paymentAccountReference;



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
    }

    /**
     * @return mixed
     */
    public function getPaymentAccountReference()
    {
        return $this->paymentAccountReference;
    }

    /**
     * @param mixed $paymentAccountReference
     */
    public function setPaymentAccountReference($paymentAccountReference)
    {
        $this->paymentAccountReference = $paymentAccountReference;
    }

}