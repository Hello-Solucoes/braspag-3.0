<?php


namespace BraspagApi\Entities;


class MerchantDefinedFieldsDataEntity
{
    /**
     * @var $merchanDefinesFieldsEntity
     */
    private $merchanDefinesFieldsEntity = [];

    /**
     * @return mixed
     */
    public function getMerchanDefinesFieldsEntity()
    {
        return $this->merchanDefinesFieldsEntity;
    }

    /**
     * @param mixed $merchanDefinesFieldsEntity
     * @return MerchantDefinedFieldsDataEntity
     */
    public function setMerchanDefinesFieldsEntity($merchanDefinesFieldsEntity)
    {
        $this->merchanDefinesFieldsEntity[] = $merchanDefinesFieldsEntity;
        return $this;
    }
}
