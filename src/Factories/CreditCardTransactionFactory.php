<?php 

namespace Braspag\Factories; 

use Braspag\Requests\CreditCardRequest;
use \StdClass;

class CreditCardTransactionFactory
{
    private $creditCardRequest;
    private $std;

    function __construct(CreditCardRequest $creditCardRequest)
    {

        $this->creditCardRequest = $creditCardRequest;
        $this->std = new StdClass();
    }

    public function make()
    {
        $std = new StdClass();

        $std->MerchantOrderId = $this->makeMerchantOrderId($this->creditCardRequest->getMerchantOrderIdEntity());
        $std->Customer = $this->makeCustomer($this->creditCardRequest->getCustomerEntity());
        $std->Payment = $this->makePayment($this->creditCardRequest->getPaymentEntity());

        return $std;
    }

    private function makeMerchantOrderId($merchandIdObj)
    {
        $merchandOrderId = new StdClass();
        $merchandOrderId->MerchantOrderId = $merchandIdObj->getMerchantOrderId();
    }

    private function makeCustomer($customerObj)
    {
        $customer = new StdClass();

        $customer->Name = $customerObj->getName();
        $customer->Identity = $customerObj->getIdentity();
        $customer->IdentityType = $customerObj->getIdentityType();
        $customer->Email = $customerObj->getEmail();
        $customer->BirthDate = $customerObj->getBirthDate();
        $customer->IpAddress = $customerObj->getIpAddress();
        $customer->Address = $this->makeAddress($customerObj->getAddress());
        $customer->DeliveryAddress = $this->makeDeliveryAddress($customerObj->getDeliveryAddress());

        return $customer;

    }

    private function makeAddress($addressObj)
    {
        $address = new StdClass;

        $address->Street = $addressObj->getStreet();
        $address->Number = $addressObj->getNumber();
        $address->Complement = $addressObj->getComplement();
        $address->ZipCode = $addressObj->getZipCode();
        $address->District = $addressObj->getDistrict();
        $address->City = $addressObj->getCity();
        $address->State = $addressObj->getState();
        $address->Country = $addressObj->getCountry();

        return $address;
    }

    private function makeDeliveryAddress($deliveryAddressObj){

        $deliveryAddress = new StdClass;

        $deliveryAddress->Street = $deliveryAddressObj->getStreet();
        $deliveryAddress->Number = $deliveryAddressObj->getNumber();
        $deliveryAddress->Complement = $deliveryAddressObj->getComplement();
        $deliveryAddress->ZipCode = $deliveryAddressObj->getZipCode();
        $deliveryAddress->District = $deliveryAddressObj->getDistrict();
        $deliveryAddress->City = $deliveryAddressObj->getCity();
        $deliveryAddress->State = $deliveryAddressObj->getState();
        $deliveryAddress->Country = $deliveryAddressObj->getCountry();

        return $deliveryAddress;

    }

    private function makePayment($paymentObj)
    {
        $payment = new StdClass;
        $payment->Provider = $paymentObj->getProvider();
        $payment->Amount = $paymentObj->getAmount();
        $payment->Type = $paymentObj->getType();
        $payment->Currency = $paymentObj->getCurrency();
        $payment->Country = $paymentObj->getCountry();
        $payment->Installments = $paymentObj->getInstallments();
        $payment->Interest = $paymentObj->getInterest();
        $payment->Capture = $paymentObj->getCapture();
        $payment->Recurrent = $paymentObj->getRecurrent();
        $payment->Authenticate = $paymentObj->getAuthenticate() ;
        $payment->SoftDescriptor = $paymentObj->getSoftDescriptor();
        $payment->DoSplit = $paymentObj->getDoSplit();
        $payment->CreditCard = $this->makeCreditCard($paymentObj->getCreditCard());
        $payment->Credentials = $this->makeCredentials($paymentObj->getCredentials());
        $payment->ExtraDataCollection = $this->makeExtraDataCollection($paymentObj->getExtraDataCollection());

        return $payment;

    }

    private function makeCreditCard($creditCardObj)
    {
        $creditCard = new StdClass;


        $creditCard->CardNumber = $creditCardObj->getCardNumber();
        $creditCard->Holder = $creditCardObj->getHolder();
        $creditCard->ExpirationDate = $creditCardObj->getExpirationDate();
        $creditCard->SecurityCode = $creditCardObj->getSecurityCode();
        $creditCard->Brand = $creditCardObj->getBrand();
        $creditCard->Alias = $creditCardObj->getAlias();
        $creditCard->CardOnFile = $creditCardObj->getCardOnFile();



        return $creditCard;
    }

    private function makeCardOnFile($cardOnFileobj)
    {
        $cardOnFile = new StdClass;

        $cardOnFile->Usage = $cardOnFileobj->getUsage();
        $cardOnFile->Reason = $cardOnFileobj->getReason();

        return $cardOnFile;

    }

    private function makeCredentials($credentialObj)
    {
        $credentials = new StdClass;

        $credentials->Code = $credentialObj->getCode();
        $credentials->Key = $credentialObj->getKey();
        $credentials->Password = $credentialObj->getPassword();
        $credentials->Username = $credentialObj->getUsername();
        $credentials->Signature = $credentialObj->getSignature();

        return $credentials;

    }

    private function makeExtraDataCollection($extraDataCollectionObj)
    {
        $extraDataCollection = new StdClass;

        $extraDataCollection->Name = $extraDataCollectionObj->getName();
        $extraDataCollection->Value = $extraDataCollectionObj->getValue();

        return $extraDataCollection;

    }
}
