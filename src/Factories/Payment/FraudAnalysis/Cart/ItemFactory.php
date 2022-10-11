<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:40
 */

namespace BraspagApi\Factories\Payment\FraudAnalysis\Cart;

/**
 *
 */
class ItemFactory
{
    /**
     * @param $item
     * @return array
     */
    public function make($item)
    {
        return [
            'GiftCategory' => $item->getGiftcategory(),
            'HostHedge' => $item->getHostHedge(),
            'NonSensicalHedge' => $item->getNonSensicalHedge(),
            'ObscenitiesHedge' => $item->getObscenitiesHedge(),
            'PhoneHedge' => $item->getPhoneHedge(),
            'Name' => $item->getName(),
            'Quantity' => $item->getQuantity(),
            'Sku' => $item->getSku(),
            'UnitPrice' => $item->getUnitPrice(),
            'Risk' => $item->getRisk(),
            'TimeHedge' => $item->getTimeHedge(),
            'Type' => $item->getType(),
            'VelocityHedge' => $item->getVelocityHedge(),
        ];
    }
}
