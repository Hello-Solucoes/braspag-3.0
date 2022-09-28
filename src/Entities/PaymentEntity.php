<?php


namespace Braspag\Entities;

use Braspag\Entities\CreditCardEntity;
use Braspag\Entities\CredentialsEntity;

class PaymentEntity
{
    /**
     * @var $provider
     */
    private $provider;

    /**
     * @var $amount
     */
    private $amount;

    /**
     * @var $type
     */
    private $type;

    /**
     * @var $currency
     */
    private $currency;

    /**
     * @var $country
     */
    private $country;

    /**
     * @var $installments
     */
    private $installments;

    /**
     * @var $interest
     */
    private $interest;

    /**
     * @var $capture
     */
    private $capture;

    /**
     * @var $authenticate
     */
    private $authenticate;

    /**
     * @var $recurrent
     */
    private $recurrent;

    /**
     * @var $softDescriptor
     */
    private $softDescriptor;

    /**
     * @var $doSplit
     */
    private $doSplit;

    /**
     * @var $creditCard
     */
    private $creditCard;

    /**
     * @var $credentials
     */
    private $credentials;

    /**
     * @var $extraDataCollection
     */
    private $extraDataCollection;

    /**
     * @var $fraudAnalysis
     */
    private $fraudAnalysis;

    /**
     * @var  $paymentId
     */
    private $paymentId;

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param mixed $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param mixed $installments
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param mixed $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * @param mixed $capture
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthenticate()
    {
        return $this->authenticate;
    }

    /**
     * @param mixed $authenticate
     */
    public function setAuthenticate($authenticate)
    {
        $this->authenticate = $authenticate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecurrent()
    {
        return $this->recurrent;
    }

    /**
     * @param mixed $recurrent
     */
    public function setRecurrent($recurrent)
    {
        $this->recurrent = $recurrent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSoftDescriptor()
    {
        return $this->softDescriptor;
    }

    /**
     * @param mixed $softDescriptor
     */
    public function setSoftDescriptor($softDescriptor)
    {
        $this->softDescriptor = $softDescriptor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDoSplit()
    {
        return $this->doSplit;
    }

    /**
     * @param mixed $doSplit
     */
    public function setDoSplit($doSplit)
    {
        $this->doSplit = $doSplit;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param \Braspag\Entities\CreditCardEntity $creditCard
     * @return $this
     */
    public function setCreditCard(CreditCardEntity $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param \Braspag\Entities\CredentialsEntity $credentials
     * @return $this
     */
    public function setCredentials(CredentialsEntity $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtraDataCollection()
    {
        return $this->extraDataCollection;
    }

    /**
     * @param mixed $extraDataCollection
     */
    public function setExtraDataCollection(ExtraDataCollectionEntity $extraDataCollection)
    {
        $this->extraDataCollection = $extraDataCollection;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @param mixed $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFraudAnalysis()
    {
        return $this->fraudAnalysis;
    }

    /**
     * @param mixed $fraudAnalysis
     * @return PaymentEntity
     */
    public function setFraudAnalysis(FraudAnalysisEntity $fraudAnalysis)
    {
        $this->fraudAnalysis = $fraudAnalysis;
        return $this;
    }
}
