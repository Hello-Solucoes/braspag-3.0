<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:19
 */

namespace Braspag\Factories\Customer;

/**
 *
 */
class CustomerFactory
{
    /**
     * @param $customer
     * @return array
     */
    public function make($customer)
    {
        $response = [
            'Name' => $customer->getName(),
            'Identity' => $customer->getIdentity(),
            'IdentityType' => $customer->getIdentityType(),
            'Email' => $customer->getEmail(),
            'BirthDate' => $customer->getBirthDate(),
            'IpAddress' => $customer->getIpAddress()
        ];

        if (!empty($customer->getAddress())) {
            $response['Address'] = $this->makeAddress($customer->getAddress());
        }

        if (!empty($customer->getDeliveryAddress())) {
            $response['DeliveryAddress'] = $this->makeDeliveryAddress($customer->getDeliveryAddress());
        }

        return $response;
    }

    /**
     * @param $address
     * @return mixed
     */
    private function makeAddress($address)
    {
        return (new AddressFactory)->make($address);
    }

    /**
     * @param $deliveryAddress
     * @return mixed
     */
    private function makeDeliveryAddress($deliveryAddress)
    {
        return (new AddressFactory)->make($deliveryAddress);
    }
}
