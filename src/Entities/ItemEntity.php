<?php


namespace BraspagApi\Entities;


class ItemEntity
{
    /**
     * @var $giftCategory
     */
    private $giftCategory;

    /**
     * @var $hostHedge
     */
    private $hostHedge;

    /**
     * @var $nonSensicalHedge
     */
    private $nonSensicalHedge;

    /**
     * @var $obscenitiesHedge
     */
    private $obscenitiesHedge;

    /**
     * @var $phoneHedge
     */
    private $phoneHedge;

    /**
     * @var $name
     */
    private $name;

    /**
     * @var $quantity
     */
    private $quantity;

    /**
     * @var $sku
     */
    private $sku;

    /**
     * @var $unitPrice
     */
    private $unitPrice;

    /**
     * @var $risk
     */
    private $risk;

    /**
     * @var $timeHedge
     */
    private $timeHedge;

    /**
     * @var $type
     */
    private $type;

    /**
     * @var $velocityHedge
     */
    private $velocityHedge;

    /**
     * @return mixed
     */
    public function getGiftCategory()
    {
        return $this->giftCategory;
    }

    /**
     * @param mixed $giftCategory
     * @return ItemEntity
     */
    public function setGiftCategory($giftCategory)
    {
        $this->giftCategory = $giftCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHostHedge()
    {
        return $this->hostHedge;
    }

    /**
     * @param mixed $hostHedge
     * @return ItemEntity
     */
    public function setHostHedge($hostHedge)
    {
        $this->hostHedge = $hostHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNonSensicalHedge()
    {
        return $this->nonSensicalHedge;
    }

    /**
     * @param mixed $nonSensicalHedge
     * @return ItemEntity
     */
    public function setNonSensicalHedge($nonSensicalHedge)
    {
        $this->nonSensicalHedge = $nonSensicalHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObscenitiesHedge()
    {
        return $this->obscenitiesHedge;
    }

    /**
     * @param mixed $obscenitiesHedge
     * @return ItemEntity
     */
    public function setObscenitiesHedge($obscenitiesHedge)
    {
        $this->obscenitiesHedge = $obscenitiesHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneHedge()
    {
        return $this->phoneHedge;
    }

    /**
     * @param mixed $phoneHedge
     * @return ItemEntity
     */
    public function setPhoneHedge($phoneHedge)
    {
        $this->phoneHedge = $phoneHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return ItemEntity
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return ItemEntity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     * @return ItemEntity
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param mixed $unitPrice
     * @return ItemEntity
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * @param mixed $risk
     * @return ItemEntity
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimeHedge()
    {
        return $this->timeHedge;
    }

    /**
     * @param mixed $timeHedge
     * @return ItemEntity
     */
    public function setTimeHedge($timeHedge)
    {
        $this->timeHedge = $timeHedge;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return ItemEntity
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVelocityHedge()
    {
        return $this->velocityHedge;
    }

    /**
     * @param mixed $velocityHedge
     * @return ItemEntity
     */
    public function setVelocityHedge($velocityHedge)
    {
        $this->velocityHedge = $velocityHedge;
        return $this;
    }
}
