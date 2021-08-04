<?php


namespace Braspag\Entities;


class FraudAnalysisEntity
{
    /**
     * @var $sequence
     */
    private $sequence;

    /**
     * @var $sequenceCriteria
     */
    private $sequenceCriteria;

    /**
     * @var $provider
     */
    private $provider;

    /**
     * @var $captureOnLowRisk
     */
    private $captureOnLowRisk;

    /**
     * @var $voidOnHighRisk
     */
    private $voidOnHighRisk;

    /**
     * @var $totalOrderAmount
     */
    private $totalOrderAmount;

    /**
     * @var $fingerPrintId
     */
    private $fingerPrintId;

    /**
     * @var $browser
     */
    private $browser;

    /**
     * @var $cart
     */
    private $cart;

    /**
     * @var $merchantDefinedFields
     */
    private $merchantDefinedFields;

    /**
     * @var $shipping
     */
    private $shipping;

    /**
     * @var $travel
     */
    private $travel;

    /**
     * @return mixed
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param mixed $sequence
     * @return FraudAnalysisEntity
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSequenceCriteria()
    {
        return $this->sequenceCriteria;
    }

    /**
     * @param mixed $sequenceCriteria
     * @return FraudAnalysisEntity
     */
    public function setSequenceCriteria($sequenceCriteria)
    {
        $this->sequenceCriteria = $sequenceCriteria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param mixed $provider
     * @return FraudAnalysisEntity
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaptureOnLowRisk()
    {
        return $this->captureOnLowRisk;
    }

    /**
     * @param mixed $captureOnLowRisk
     * @return FraudAnalysisEntity
     */
    public function setCaptureOnLowRisk($captureOnLowRisk)
    {
        $this->captureOnLowRisk = $captureOnLowRisk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVoidOnHighRisk()
    {
        return $this->voidOnHighRisk;
    }

    /**
     * @param mixed $voidOnHighRisk
     * @return FraudAnalysisEntity
     */
    public function setVoidOnHighRisk($voidOnHighRisk)
    {
        $this->voidOnHighRisk = $voidOnHighRisk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalOrderAmount()
    {
        return $this->totalOrderAmount;
    }

    /**
     * @param mixed $totalOrderAmount
     * @return FraudAnalysisEntity
     */
    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFingerPrintId()
    {
        return $this->fingerPrintId;
    }

    /**
     * @param mixed $fingerPrintId
     * @return FraudAnalysisEntity
     */
    public function setFingerPrintId($fingerPrintId)
    {
        $this->fingerPrintId = $fingerPrintId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * @param mixed $browser
     * @return FraudAnalysisEntity
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * @param mixed $cart
     * @return FraudAnalysisEntity
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantDefinedFields()
    {
        return $this->merchantDefinedFields;
    }

    /**
     * @param mixed $merchantDefinedFields
     * @return FraudAnalysisEntity
     */
    public function setMerchantDefinedFields($merchantDefinedFields)
    {
        $this->merchantDefinedFields = $merchantDefinedFields;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     * @return FraudAnalysisEntity
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTravel()
    {
        return $this->travel;
    }

    /**
     * @param mixed $travel
     * @return FraudAnalysisEntity
     */
    public function setTravel($travel)
    {
        $this->travel = $travel;
        return $this;
    }


}