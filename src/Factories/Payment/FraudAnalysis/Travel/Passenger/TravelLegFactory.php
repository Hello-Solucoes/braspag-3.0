<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:45
 */

namespace BraspagApi\Factories\Payment\FraudAnalysis\Travel\Passenger;

/**
 *
 */
class TravelLegFactory
{
    /**
     * @param $travelLegs
     * @return array
     */
    public function make($travelLegs)
    {
        return [
            'Origin' => $travelLegs->getOrigin(),
            'Destination' => $travelLegs->getDestination(),
        ];
    }
}
