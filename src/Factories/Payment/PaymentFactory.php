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
    private function make($payment)
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
        return app(CreditCardFactory::class)->make($creditCard);
    }

    /**
     * @param $credential
     * @return array
     */
    private function makeCredentials($credential)
    {
        return app(CredentialFactory::class)->make($credential);
    }

    /**
     * @param $extraDataCollection
     * @return array
     */
    private function makeExtraDataCollection($extraDataCollection)
    {
        return app(ExtraCollectionFactory::class)->make($extraDataCollection);
    }

    /**
     * @param $fraudAnalysis
     * @return array
     */
    private function makeFraudAnalysis($fraudAnalysis)
    {
        return app(FraudAnalysisFactory::class)->make($fraudAnalysis);
    }
}
