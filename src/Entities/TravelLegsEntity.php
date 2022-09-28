<?php


namespace Braspag\Entities;


class TravelLegsEntity
{
    /**
     * @var $origin
     */
    private $origin;

    /**
     * @var $destination
     */
    private $destination;

    /**
     * @return mixed
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param mixed $origin
     * @return TravelLegsEntity
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     * @return TravelLegsEntity
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }
}
