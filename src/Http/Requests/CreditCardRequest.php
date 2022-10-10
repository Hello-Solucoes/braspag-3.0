<?php


namespace BraspagApi\Http\Requests;

use BraspagApi\Entities\CustomerEntity;
use BraspagApi\Entities\MerchantOrderEntity;
use BraspagApi\Entities\PaymentEntity;

/**
 *
 */
class CreditCardRequest
{
    /**
     * @var $merchantOrderIdEntity
     */
    private $merchantOrderIdEntity;

    /**
     * @var $customerEntity
     */
    private $customerEntity;

    /**
     * @var $paymentEntity
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
     * @param MerchantOrderEntity $merchantOrderIdEntity
     * @return $this
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
     * @param CustomerEntity $customerEntity
     * @return $this
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
     * @param PaymentEntity $paymentEntity
     * @return $this
     */
    public function setPaymentEntity(PaymentEntity $paymentEntity)
    {
        $this->paymentEntity = $paymentEntity;

        return $this;
    }
}
