<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:21
 */

namespace BraspagApi\Factories\Customer;

/**
 *
 */
class AddressFactory
{
    /**
     * @param $address
     * @return array
     */
    public function make($address)
    {
        return [
            'Street' => $address->getStreet(),
            'Number' => $address->getNumber(),
            'Complement' => $address->getComplement(),
            'ZipCode' => $address->getZipCode(),
            'City' => $address->getCity(),
            'State' => $address->getState(),
            'Country' => $address->getCountry(),
            'District' => $address->getDistrict()
        ];
    }
}
