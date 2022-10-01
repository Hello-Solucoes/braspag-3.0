<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 10:24
 */

namespace Braspag\Factories\Payment;

use function Braspag\Factories\app;

class PaymentFactory
{
    /**
     * @param $payment
     * @return array
     */
    public function make($payment)
    {
        $response = [
            'Provider' => $payment->getProvider(),
            'Type' => $payment->getType(),
            'Amount' => $payment->getAmount(),
            'Currency' => $payment->getCurrency(),
            'Country' => $payment->getCountry(),
            'Installments' => $payment->getInstallments(),
            'Interest' => $payment->getInterest(),
            'Capture' => $payment->getCapture(),
            'Authenticate' => $payment->getAuthenticate(),
            'Recurrent' => $payment->getRecurrent(),
            'SoftDescriptor' => $payment->getSoftDescriptor(),
            'DoSplit' => $payment->getDoSplit(),
            'CreditCard' => $this->makeCreditCard($payment->getCreditCard())
        ];

        if (!empty($payment->getCredentials())) {
            $response['Credentials'] = $this->makeCredentials($payment->getCredentials());
        }

        if (!empty($payment->getExtraDataCollection())) {
            $response['ExtraDataCollection'][] = $this->makeExtraDataCollection($payment->getExtraDataCollection());
        }

        if (!empty($payment->getFraudAnalysis())) {
            $response['FraudAnalysis'] = $this->makeFraudAnalysis($payment->getFraudAnalysis());
        }

        return $response;
    }

    /**
     * @param $creditCard
     * @return array
     */
    private function makeCreditCard($creditCard)
    {
        return (new CreditCardFactory)->make($creditCard);
    }

    /**
     * @param $credential
     * @return array
     */
    private function makeCredentials($credential)
    {
        return (new CredentialFactory)->make($credential);
    }

    /**
     * @param $extraDataCollection
     * @return array
     */
    private function makeExtraDataCollection($extraDataCollection)
    {
        return (new ExtraCollectionFactory)->make($extraDataCollection);
    }

    /**
     * @param $fraudAnalysis
     * @return array
     */
    private function makeFraudAnalysis($fraudAnalysis)
    {
        return (new FraudAnalysisFactory)->make($fraudAnalysis);
    }
}
