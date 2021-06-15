<?php


namespace Braspag\Clients\Braspag\Factories;

use Braspag\Requests\CreditCardRequest;
use stdClass;

class SimpleTransactionFactory
{
    /**
     * @var CreditCardRequest
     */
    private $creditCardRequest;

    /**
     * FullTransactionFactory constructor.
     * @param CreditCardRequest $creditCardRequest
     */
    function __construct(CreditCardRequest $creditCardRequest)
    {
        $this->creditCardRequest = $creditCardRequest;
    }

    public function make()
    {
        $request = new StdClass;
        $request->Customer = $this->makeCustomer();
        $request->Payment = $this->makePayment();
        
        return $request;
    }

    private function makeCustomer()
    {
        $customerEntity = $this->creditCardRequest->getCustomerEntity();
       
        $customer = new StdClass;
        $customer->Name = $customerEntity->getName();
         
        return $customer;
    }

    private function makePayment()
    {
        $payment  = $this->creditCardRequest->getPaymentEntity();
      
        $customer = new StdClass();
        $customer->Type = $payment->getType();
        $customer->Amount = $payment->getAmount();
        $customer->Installments = $payment->getInstallments();
        $customer->SoftDescriptor = $payment->getSoftDescriptor();
        $customer->CreditCard = $this->makeCreditCard();
        $customer->IsCryptoCurrencyNegotiation = $this->makeCripto();
       
        return $customer;

    }

    private function makeCreditCard()
    {
        $payment  = $this->creditCardRequest->getPaymentEntity()->getCreditCard();
      
        $customer = new StdClass();

        $customer->CardNumber = $payment->getCardNumber();
        $customer->Holder = $payment->getHolder();
        $customer->ExpirationDate = $payment->getExpirationDate();
        $customer->SecurityCode = $payment->getSecurityCode();
        $customer->Brand = $payment->getBrand();
        $customer->CardOnFile = $this->makeCardOnfile();

        return $customer;
    }

    private function makeCardOnfile()
    {
        $cardOnfile  = $this->creditCardRequest->getPaymentEntity()->getCreditCard()->getCardOnFile();

        $customer = new StdClass();
        $customer->Usage = $cardOnfile->getUsage();
        $customer->Reason = $cardOnfile->getReason();
       
        return $customer;

    }

    private function makeCripto()
    {
        $cripto  = $this->creditCardRequest->getIsCryptoCurrencyNegotiationEntity();

        $customer = new StdClass();
        $customer = $cripto->getIsCryptoCurrencyNegotiation();
        
        return $customer;
    }

}


