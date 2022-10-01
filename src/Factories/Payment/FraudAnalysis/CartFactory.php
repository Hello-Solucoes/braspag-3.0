<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:39
 */

namespace Braspag\Factories\Payment\FraudAnalysis;

use Braspag\Factories\Payment\FraudAnalysis\Cart\ItemFactory;

/**
 *
 */
class CartFactory
{
    /**
     * @param $cart
     * @return array
     */
    public function make($cart)
    {
        $response = [
            'IsGift' => $cart->getIsGift(),
            'ReturnsAccepted' => $cart->getReturnsAccepted(),
        ];

        if (!empty($cart->getItems())) {
            $response['Items'][] = $this->makeItems($cart->getItems());
        }

        return $response;
    }

    /**
     * @param $items
     * @return array
     */
    private function makeItems($items)
    {
        return (new ItemFactory)->make($items);
    }
}
