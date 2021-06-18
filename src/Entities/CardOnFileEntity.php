<?php


namespace Braspag\Entities;


class CardOnFileEntity
{
    /**
     * @var $usage
     */
    private $usage;

    /**
     * @var $reason
     */
    private $reason;

    /**
     * @return mixed
     */
    public function getUsage()
    {
        return $this->usage;

    }

    /**
     * @param mixed $usage
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;

    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

}