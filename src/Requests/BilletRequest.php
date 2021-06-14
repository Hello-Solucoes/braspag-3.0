<?php


namespace braspag\Requests;


class BilletRequest
{
    private $customerEntity;
    private $paymentEntity;
    private $addressEntity;

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
        $this->customerEntity = $customerEntity;
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

   


}