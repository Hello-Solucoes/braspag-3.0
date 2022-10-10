<?php


namespace BraspagApi\Entities;


class MerchantOrderEntity
{
    /**
     * @var $merchantOrderId
     */
    private $merchantOrderId;

    /**
     * @return mixed
     */
    public function getMerchantOrderId()
    {
        return $this->merchantOrderId;
    }

    /**
     * @param mixed $merchantOrderId
     */
    public function setMerchantOrderId($merchantOrderId)
    {
        $this->merchantOrderId = $merchantOrderId;
        return $this;
    }
}
