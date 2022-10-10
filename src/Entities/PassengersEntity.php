<?php


namespace BraspagApi\Entities;


class PassengersEntity
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
     * @var $status
     */
    private $status;

    /**
     * @var $rating
     */
    private $rating;

    /**
     * @var $email
     */
    private $email;

    /**
     * @var $phone
     */
    private $phone;

    /**
     * @var $travelLegs
     */
    private $travelLegs;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return PassengersEntity
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
     * @return PassengersEntity
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return PassengersEntity
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     * @return PassengersEntity
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
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
     * @return PassengersEntity
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
     * @return PassengersEntity
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTravelLegs()
    {
        return $this->travelLegs;
    }

    /**
     * @param mixed $travelLegs
     * @return PassengersEntity
     */
    public function setTravelLegs(TravelLegsEntity $travelLegs)
    {
        $this->travelLegs = $travelLegs;
        return $this;
    }
}
