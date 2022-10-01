<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:44
 */

namespace Braspag\Factories\Payment\FraudAnalysis\Travel;

use Braspag\Factories\Payment\FraudAnalysis\Travel\Passenger\TravelLegFactory;

/**
 *
 */
class PassengerFactory
{
    /**
     * @param $passenger
     * @return array
     */
    public function make($passenger)
    {
        $response = [
            'Name' => $passenger->getName(),
            'Identity' => $passenger->getIdentity(),
            'Status' => $passenger->getStatus(),
            'Rating' => $passenger->getRating(),
            'Email' => $passenger->getEmail(),
            'Phone' => $passenger->getPhone(),
        ];

        if (!empty($passenger->getTravelLegs())) {
            $response['TravelLegs'][] = $this->makeTravelLegs($passenger->getTravelLegs());
        }


        return $response;
    }

    /**
     * @param $travelLegs
     * @return array
     */
    private function makeTravelLegs($travelLegs)
    {
        return (new TravelLegFactory)->make($travelLegs);
    }
}
