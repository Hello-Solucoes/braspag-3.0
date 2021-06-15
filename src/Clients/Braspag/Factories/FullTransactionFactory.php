<?php


namespace Braspag\Clients\Braspag\Factories;

use Braspag\Requests\CreditCardRequest;
use stdClass;

class FullTransactionFactory
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
        $customer->Email = $customerEntity->getEmail();
        $customer->Birthdate = $customerEntity->getBirthdate();
        
        if ($customerEntity->getAddress()) {
            $customer->Address = $this->makeCustomerAddress();
        }
     
        if ($customerEntity->getDeliveryAddress()) {
            $customer->DeliveryAddress = $this->makeCustomerDeliveryAddress();
        }
       
        
        
      
        return $customer;
    }

    private function makeCustomerAddress()
    {
        $address = new StdClass();
        $addressEntity = $this->creditCardRequest->getCustomerEntity()->getAddress();
     
        $address->Street = $addressEntity->getStreet();
        $address->Number = $addressEntity->getNumber();
        $address->Complement = $addressEntity->getComplement();
        $address->ZipCode = $addressEntity->getZipCode();
        $address->City = $addressEntity->getCity();
        $address->State = $addressEntity->getState();
        $address->Country = $addressEntity->getCountry();

        return $address;
    }

    private function makeCustomerDeliveryAddress()
    {
        $deliveryAddress = $this->creditCardRequest->getCustomerEntity()->getDeliveryAddress();
        $customer = new StdClass();

        $customer->Street = $deliveryAddress->getStreet();
        $customer->Number = $deliveryAddress->getNumber();
        $customer->Complement = $deliveryAddress->getComplement();
        $customer->ZipCode = $deliveryAddress->getZipCode();
        $customer->City = $deliveryAddress->getCity();
        $customer->State = $deliveryAddress->getState();
        $customer->Country = $deliveryAddress->getCountry();

        return $customer;
    }

    private function makePayment()
    {
        $payment  = $this->creditCardRequest->getPaymentEntity();
        
        $customer = new StdClass();
       
        $customer->Currency = $payment->getCurrency();
        $customer->Country = $payment->getCountry();
        $customer->ServiceTaxAmount = $payment->getServiceTaxAmount();
        $customer->Installments = $payment->getInstallments();
        $customer->Interest = $payment->getInterest();
        $customer->Capture = $payment->getCapture();
        $customer->Authenticate = ($payment->getAuthenticate() == false)?'0':'1';
        $customer->SoftDescriptor = $payment->getSoftDescriptor();
        
      
        $customer->CreditCard = $this->makeCreditCard();
        $customer->IsCryptoCurrencyNegotiation = $this->makeCripto();
        $customer->Type = "CreditCard";
        $customer->Amount = $this->makeAmount();
        $customer->AirlineData = $this->makeArlineTicket();
        
       
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
        $customer->SaveCard = $payment->getSaveCard();
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

    private function makeAmount()
    {
        $payment  = $this->creditCardRequest->getAmountEntity();

        $customer = new StdClass();
        $customer = $payment->getAmount();

        return $customer;
    }
    private function makeArlineTicket()
    {
        $payment  = $this->creditCardRequest->getTicketNumberEntity();

        $customer = new StdClass();
        $customer->TicketNumber = $payment->getArlineNumber();

        return $customer;
    }
}


