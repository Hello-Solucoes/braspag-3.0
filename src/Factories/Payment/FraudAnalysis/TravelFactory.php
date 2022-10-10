<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:43
 */

namespace BraspagApi\Factories\Payment\FraudAnalysis;

use BraspagApi\Factories\Payment\FraudAnalysis\Travel\PassengerFactory;

/**
 *
 */
class TravelFactory
{
    /**
     * @param $travel
     * @return array
     */
    public function make($travel)
    {
        $response = [
            'JourneyType' => $travel->getJourneyType(),
            'DepartureTime' => $travel->getDepartureTime(),
        ];

        if (!empty($travel->getPassengers())) {
            $response['Passengers'][] = $this->makePassengers($travel->getPassengers());
        }


        return $response;
    }

    /**
     * @param $passengers
     * @return array
     */
    private function makePassengers($passengers)
    {
        return (new PassengerFactory)->make($passengers);
    }
}
