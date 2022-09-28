<?php


namespace Braspag\Entities;


class CartEntity
{
    /**
     * @var $isGift
     */
    private $isGift;

    /**
     * @var $returnsAccepted
     */
    private $returnsAccepted;

    /**
     * @var $items
     */
    private $items;

    /**
     * @return mixed
     */
    public function getIsGift()
    {
        return $this->isGift;
    }

    /**
     * @param mixed $isGift
     * @return CartEntity
     */
    public function setIsGift($isGift)
    {
        $this->isGift = $isGift;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnsAccepted()
    {
        return $this->returnsAccepted;
    }

    /**
     * @param mixed $returnsAccepted
     * @return CartEntity
     */
    public function setReturnsAccepted($returnsAccepted)
    {
        $this->returnsAccepted = $returnsAccepted;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     * @return CartEntity
     */
    public function setItems(ItemEntity $items)
    {
        $this->items = $items;
        return $this;
    }
}
