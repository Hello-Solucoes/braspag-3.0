<?php


namespace BraspagApi\Entities;


class MerchantDefinedFieldsEntity
{

    /**
     * @var $id
     */
    private $id;

    /**
     * @var $value
     */
    private $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return MerchantDefinedFieldsEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return MerchantDefinedFieldsEntity
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
