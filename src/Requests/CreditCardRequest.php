<?php


namespace Braspag\Requests;

use braspag\Entities\CustomerEntity;
use braspag\Entities\PaymentEntity;

class CreditCardRequest
{
    private $customerEntity;
    private $paymentEntity;

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
    public function setPaymentEntity(PaymentEntity $paymentEntity)
    {
        $this->paymentEntity = $paymentEntity;
        return $this;
    }



}