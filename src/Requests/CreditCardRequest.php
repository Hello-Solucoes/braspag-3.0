<?php


namespace Braspag\Requests;

use braspag\Entities\CustomerEntity;
use braspag\Entities\PaymentEntity;

class CreditCardRequest
{
    private $customerEntity;
    private $addressEntity;
    private $deliveryAddressEntity;
    private $paymentEntity;
    private $isCryptoCurrencyNegotiationEntity;
    private $typeEntity;
    private $amountEntity;
    private $ticketNumberEntity;

    /**
     * @return mixed
     */
    public function getCustomerEntity()
    {
        return $this->customerEntity;
    }

    /**
     * @param mixed $customerEntity
     */
    public function setCustomerEntity(CustomerEntity $customerEntity) 
    {
        $this->customerEntity = $customerEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentEntity()
    {
        return $this->paymentEntity;
    }

    /**
     * @param mixed $paymentEntity
     */
    public function setPaymentEntity($paymentEntity)
    {
        $this->paymentEntity = $paymentEntity;
    }

    /**
     * @return mixed
     */
    public function getIsCryptoCurrencyNegotiationEntity()
    {
        return $this->isCryptoCurrencyNegotiationEntity;
    }

    /**
     * @param mixed $isCryptoCurrencyNegotiationEntity
     */
    public function setIsCryptoCurrencyNegotiationEntity($isCryptoCurrencyNegotiationEntity)
    {
        $this->isCryptoCurrencyNegotiationEntity = $isCryptoCurrencyNegotiationEntity;
    }

    /**
     * @return mixed
     */
    public function getTypeEntity()
    {
        return $this->typeEntity;
    }

    /**
     * @param mixed $typeEntity
     */
    public function setTypeEntity($typeEntity)
    {
        $this->typeEntity = $typeEntity;
    }

    /**
     * @return mixed
     */
    public function getAmountEntity()
    {
        return $this->amountEntity;
    }

    /**
     * @param mixed $amountEntity
     */
    public function setAmountEntity($amountEntity)
    {
        $this->amountEntity = $amountEntity;
    }

    /**
     * @return mixed
     */
    public function getTicketNumberEntity()
    {
        return $this->ticketNumberEntity;
    }

    /**
     * @param mixed $ticketNumberEntity
     */
    public function setTicketNumberEntity($ticketNumberEntity)
    {
        $this->ticketNumberEntity = $ticketNumberEntity;
    }


    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param mixed $payment
     */
    public function setPayment(PaymentEntity$payment)
    {
        $this->payment = $payment;
        return $this;
    }
  

}