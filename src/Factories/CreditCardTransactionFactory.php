<?php 

namespace Braspag\Factories; 

use Braspag\Requests\CreditCardRequest;
use \StdClass;

class CreditCardTransactionFactory
{
    /**
     * @var CreditCardRequest
     */
    private $creditCardRequest;

    /**
     * @var StdClass
     */
    private $std;

    /**
     * @param CreditCardRequest $creditCardRequest
     */
    function __construct(CreditCardRequest $creditCardRequest)
    {

        $this->creditCardRequest = $creditCardRequest;
        $this->std = new StdClass();
    }

    /**
     * @return StdClass
     */
    public function make()
    {
        $std = new StdClass();

        $std->MerchantOrderId = $this->makeMerchantOrderId($this->creditCardRequest->getMerchantOrderIdEntity());
        $std->Customer = $this->makeCustomer($this->creditCardRequest->getCustomerEntity());
        $std->Payment = $this->makePayment($this->creditCardRequest->getPaymentEntity());

        return $std;
    }

    /**
     * @param $merchandIdObj
     * @return mixed
     */
    private function makeMerchantOrderId($merchandIdObj)
    {
        $merchandOrderId = new StdClass();
        $merchandOrderId = $merchandIdObj->getMerchantOrderId();
        return $merchandOrderId;
    }

    /**
     * @param $customerObj
     * @return StdClass
     */
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

    /**
     * @param $addressObj
     * @return StdClass
     */
    private function makeAddress($addressObj)
    {
        $address = new StdClass;

        $address->Street = $addressObj->getStreet();
        $address->Number = $addressObj->getNumber();
        $address->Complement = $addressObj->getComplement();
        $address->ZipCode = $addressObj->getZipCode();
        $address->City = $addressObj->getCity();
        $address->State = $addressObj->getState();
        $address->Country = $addressObj->getCountry();
        $address->District = $addressObj->getDistrict();

        return $address;
    }

    /**
     * @param $deliveryAddressObj
     * @return StdClass
     */
    private function makeDeliveryAddress($deliveryAddressObj){

        $deliveryAddress = new StdClass;

        $deliveryAddress->Street = $deliveryAddressObj->getStreet();
        $deliveryAddress->Number = $deliveryAddressObj->getNumber();
        $deliveryAddress->Complement = $deliveryAddressObj->getComplement();
        $deliveryAddress->ZipCode = $deliveryAddressObj->getZipCode();
        $deliveryAddress->City = $deliveryAddressObj->getCity();
        $deliveryAddress->State = $deliveryAddressObj->getState();
        $deliveryAddress->Country = $deliveryAddressObj->getCountry();
        $deliveryAddress->District = $deliveryAddressObj->getDistrict();

        return $deliveryAddress;

    }

    /**
     * @param $paymentObj
     * @return StdClass
     */

    private function makePayment($paymentObj)
    {
        $payment = new StdClass;
        $payment->Provider = $paymentObj->getProvider();
        $payment->Type = $paymentObj->getType();
        $payment->Amount = $paymentObj->getAmount();
        $payment->Currency = $paymentObj->getCurrency();
        $payment->Country = $paymentObj->getCountry();
        $payment->Installments = $paymentObj->getInstallments();
        $payment->Interest = $paymentObj->getInterest();
        $payment->Capture = $paymentObj->getCapture();
        $payment->Authenticate = $paymentObj->getAuthenticate() ;
        $payment->Recurrent = $paymentObj->getRecurrent();
        $payment->SoftDescriptor = $paymentObj->getSoftDescriptor();
        $payment->DoSplit = $paymentObj->getDoSplit();
        $payment->CreditCard = $this->makeCreditCard($paymentObj->getCreditCard());
        $payment->Credentials = $this->makeCredentials($paymentObj->getCredentials());
        $payment->ExtraDataCollection[] = $this->makeExtraDataCollection($paymentObj->getExtraDataCollection());

        return $payment;

    }

    /**
     * @param $creditCardObj
     * @return StdClass
     */
    private function makeCreditCard($creditCardObj)
    {
        $creditCard = new StdClass;


        $creditCard->CardNumber = $creditCardObj->getCardNumber();
        $creditCard->Holder = $creditCardObj->getHolder();
        $creditCard->ExpirationDate = $creditCardObj->getExpirationDate();
        $creditCard->SecurityCode = $creditCardObj->getSecurityCode();
        $creditCard->Brand = $creditCardObj->getBrand();
        $creditCard->SaveCard = $creditCardObj->getSaveCard();
        $creditCard->Alias = $creditCardObj->getAlias();
        $creditCard->CardOnFile = $this->makeCardOnFile($creditCardObj->getCardOnFile());



        return $creditCard;
    }

    /**
     * @param $cardOnFileobj
     * @return StdClass
     */
    private function makeCardOnFile($cardOnFileobj)
    {
        $cardOnFile = new StdClass;

        $cardOnFile->Usage = $cardOnFileobj->getUsage();
        $cardOnFile->Reason = $cardOnFileobj->getReason();

        return $cardOnFile;

    }

    /**
     * @param $credentialObj
     * @return StdClass
     */
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

    /**
     * @param $extraDataCollectionObj
     * @return StdClass
     */
    private function makeExtraDataCollection($extraDataCollectionObj)
    {
        $extraDataCollection = new StdClass;

        $extraDataCollection->Name = $extraDataCollectionObj->getName();
        $extraDataCollection->Value = $extraDataCollectionObj->getValue();

        return $extraDataCollection;

    }
}
