<?php


namespace Braspag\Entities;


class TravelEntity
{
   /**
   * @var $journeyType
   */
   private $journeyType;

   /**
   * @var $departureTime
   */
   private $departureTime;

   /**
   * @var $passengers
   */
   private $passengers;

    /**
     * @return mixed
     */
    public function getJourneyType()
    {
        return $this->journeyType;
    }

    /**
     * @param mixed $journeyType
     * @return TravelEntity
     */
    public function setJourneyType($journeyType)
    {
        $this->journeyType = $journeyType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param mixed $departureTime
     * @return TravelEntity
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * @param mixed $passengers
     * @return TravelEntity
     */
    public function setPassengers(PassengersEntity $passengers)
    {
        $this->passengers = $passengers;
        return $this;
    }




}