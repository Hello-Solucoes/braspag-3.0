<?php


namespace Braspag\Requests;

use Braspag\Entities\CustomerEntity;
use Braspag\Entities\MerchantOrderEntity;
use Braspag\Entities\PaymentEntity;

class CreditCardRequest
{

    private $merchantOrderIdEntity;

    /**
    *
    **/
    private $customerEntity;

    /**
    *
    */
    private $paymentEntity;

    /**
     * @return mixed
     */
    public function getMerchantOrderIdEntity()
    {
        return $this->merchantOrderIdEntity;
    }

    /**
     * @param mixed $merchantOrderIdEntity
     */
    public function setMerchantOrderIdEntity(MerchantOrderEntity $merchantOrderIdEntity)
    {
        $this->merchantOrderIdEntity = $merchantOrderIdEntity;
        return $this;
    }

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