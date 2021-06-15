<?php


namespace Braspag\Requests;

use braspag\Entities\CustomerEntity;
use braspag\Entities\PaymentEntity;

class CreditCardRequest
{

    private $MerchantOrderId;

    /**
    *
    **/
    private $Customer;

    /**
    *
    */
    private $Payment;


     /**
     * @return mixed
     */
    public function getMerchantOrderId()
    {
        return $this->Customer;
    }

    /**
     * @param mixed $customerEntity
     */
    public function setMerchantOrderId($merchantOrderId) 
    {
        $this->MerchantOrderId = $merchantOrderId;
        return $this;
    }



    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * @param mixed $customerEntity
     */
    public function setCustomer(CustomerEntity $customerEntity) 
    {
        $this->Customer = $customerEntity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param mixed $paymentEntity
     */
    public function setPayment(PaymentEntity $paymentEntity)
    {
        $this->Payment = $paymentEntity;
        return $this;
    }



}