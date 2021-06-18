<?php


namespace Braspag\Entities;

use Braspag\Entities\AddressEntity;

class CustomerEntity
{
    /**
     * @var $name
     */
    private $name;

    /**
     * @var $identity
     */
    private $identity;

    /**
     * @var $identityType
     */
    private $identityType;

    /**
     * @var $email
     */
    private $email;

    /**
     * @var $birthdate
     */
    private $birthdate;

    /**
     * @var $ipAddress
     */
    private $ipAddress;

    /**
     * @var $address
     */
    private $address;

    /**
     * @var $deliveryAddress
     */
    private $deliveryAddress;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param mixed $identity
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentityType()
    {
        return $this->identityType;
    }

    /**
     * @param mixed $identityType
     */
    public function setIdentityType($identityType)
    {
        $this->identityType = $identityType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(AddressEntity $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress(AddressEntity $deliveryAddress)
    {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }



}