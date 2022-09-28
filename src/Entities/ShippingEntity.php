<?php


namespace Braspag\Entities;


class ShippingEntity
{
    /**
     * @var $addressee
     */
    private $addressee;

    /**
     * @var $method
     */
    private $method;

    /**
     * @var $phone
     */
    private $phone;

    /**
     * @return mixed
     */
    public function getAddressee()
    {
        return $this->addressee;
    }

    /**
     * @param mixed $addressee
     * @return ShippingEntity
     */
    public function setAddressee($addressee)
    {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $method
     * @return ShippingEntity
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return ShippingEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
}
