<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:41
 */

namespace BraspagApi\Factories\Payment\FraudAnalysis;

/**
 *
 */
class MerchantDefinedFieldFactory
{
    /**
     * @param $field
     * @return array
     */
    public function make($field)
    {
        return [
            'Id' => $field->getId(),
            'Value' => $field->getValue(),
        ];
    }
}
