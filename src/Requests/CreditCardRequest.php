<?php


namespace braspag\Requests;

use braspag\Entities\CustomerEntity;

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
    public function setCustomerEntity($customerEntity) 
    {
        return $this->customerEntity = $customerEntity;
        
    }

    /**
     * @return mixed
     */
    public function getAddressEntity()
    {
        return $this->addressEntity;
    }

    /**
     * @param mixed $addressEntity
     */
    public function setAddressEntity($addressEntity)
    {
        $this->addressEntity = $addressEntity;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddressEntity()
    {
        return $this->deliveryAddressEntity;
    }

    /**
     * @param mixed $deliveryAddressEntity
     */
    public function setDeliveryAddressEntity($deliveryAddressEntity)
    {
        $this->deliveryAddressEntity = $deliveryAddressEntity;
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
}