<?php


namespace braspag\Clients\BrasPag\Factories;

use braspag\Requests\BilletRequest;
use stdClass;


class TransactionBilletFactory
{
    /**
     * @var BilletRequest
     */

    private $billetRequest;

    /**
     * BilletRequest constructor.
     * @param BilletRequest $billetRequest
     */

    function __construct(BilletRequest $billetRequest)
    {
        $this->billetRequest = $billetRequest;
    }

    /**
     *
     */
    public function make()
    {
        $request = new StdClass;
        $request->MerchantOrderId = '123456';
        $request->Customer = $this->makeCustomer();
        $request->Payment = $this->makePayment();

        return $request;
    }

    private function makeCustomer()
    {
        $customerEntity = $this->billetRequest->getCustomerEntity();

        $customer = new StdClass;
        $customer->Name = $customerEntity->getName();
        $customer->Identity = $customerEntity->getIdentity();
        
        if ($customerEntity->getAddress()) {
            $customer->Address = $this->makeCustomerAddress();
        }

        return $customer;
    }

    private function makeCustomerAddress()
    {
        $addressEntity = $this->billetRequest->getCustomerEntity()->getAddress();
        
        $customer = new StdClass();

        $customer->Street = $addressEntity->getStreet();
        $customer->Number = $addressEntity->getNumber();
        $customer->Complement = $addressEntity->getComplement();
        $customer->ZipCode = $addressEntity->getZipCode();
        $customer->District = $addressEntity->getDistrict();
        $customer->City = $addressEntity->getCity();
        $customer->State = $addressEntity->getState();
        $customer->Country = $addressEntity->getCountry();

        return $customer;
    }

    private function makePayment()
    {
        $payment  = $this->billetRequest->getPaymentEntity();
        
        $customer = new StdClass();

        $customer->Type = 'Boleto';
        $customer->Amount =  $payment->getAmount();
        $customer->Provider = $payment->getProvider();
        $customer->Address = $payment->getAddress();
        $customer->BoletoNumber = $payment->getBoletoNumber();
        $customer->Assignor = $payment->getAssignor();
        $customer->Demonstrative = $payment->getDemonstrative();
        $customer->ExpirationDate = $payment->getExpirationDate();
        $customer->Identification = $payment->getIdentification();
        $customer->Instructions = $payment->getInstructions();
        
        return $customer;
    }
}