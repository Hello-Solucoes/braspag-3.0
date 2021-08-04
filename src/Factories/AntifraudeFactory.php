<?php

namespace Braspag\Factories;

use Braspag\Requests\AntiFraudeRequest;
use \StdClass;

class AntifraudeFactory
{
    /**
     * @var AntiFraudeRequest
     */
    private $antiFraudeRequest;

    /**
     * @param AntiFraudeRequest $antiFraudeRequest
     */
    function __construct(AntiFraudeRequest $antiFraudeRequest)
    {

        $this->antiFraudeRequest = $antiFraudeRequest;

    }

    public function make()
    {
        $std = new StdClass();

        $std->MerchantOrderId = $this->makeMerchantOrderId($this->antiFraudeRequest->getMerchantOrderIdEntity());
        $std->Customer = $this->makeCustomer($this->antiFraudeRequest->getCustomerEntity());
        $std->Payment = $this->makePayment($this->antiFraudeRequest->getPaymentEntity());

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

        if ($customerObj->getAddress()) {
            $customer->Address = $this->makeAddress($customerObj->getAddress());
        }

        if($customerObj->getDeliveryAddress()){
            $customer->DeliveryAddress = $this->makeDeliveryAddress($customerObj->getDeliveryAddress());
        }

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

        if($paymentObj->getCredentials()){
            $payment->Credentials = $this->makeCredentials($paymentObj->getCredentials());
        }

        if($paymentObj->getExtraDataCollection()){
            $payment->ExtraDataCollection[] = $this->makeExtraDataCollection($paymentObj->getExtraDataCollection());
        }

        if ($paymentObj->getFraudAnalysis()) {
            $payment->FraudAnalysis = $this->makeFraudAnalysis($paymentObj->getFraudAnalysis());
        }


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

        if ($creditCardObj->getCardOnFile()) {
            $creditCard->CardOnFile = $this->makeCardOnFile($creditCardObj->getCardOnFile());
        }

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

    private function makeFraudAnalysis($fraudAnalysisObj)
    {

        $fraudAnalysis = new StdClass();

        $fraudAnalysis->Sequence = $fraudAnalysisObj->getSequence();
        $fraudAnalysis->SequenceCriteria = $fraudAnalysisObj->getSequenceCriteria();
        $fraudAnalysis->Provider = $fraudAnalysisObj->getProvider();
        $fraudAnalysis->CaptureOnLowRisk = $fraudAnalysisObj->getCaptureOnLowRisk();
        $fraudAnalysis->VoidOnHighRisk = $fraudAnalysisObj->getVoidOnHighRisk() ;
        $fraudAnalysis->TotalOrderAmount = $fraudAnalysisObj->getTotalOrderAmount();
        $fraudAnalysis->FingerPrintId = $fraudAnalysisObj->getFingerPrintId();

        if($fraudAnalysisObj->getBrowser()){
            $fraudAnalysis->Browser = $this->makeBrowser($fraudAnalysisObj->getBrowser());
        }

        if($fraudAnalysisObj->getCart()){
            $fraudAnalysis->Cart = $this->makeCart($fraudAnalysisObj->getCart());
        }

        if($fraudAnalysisObj->getMerchantDefinedFields()){
            $fraudAnalysis->MerchantDefinedFields[] = $this->makeMerchantDefinedFields($fraudAnalysisObj->getMerchantDefinedFields());
        }

        if($fraudAnalysisObj->getShipping()){
            $fraudAnalysis->Shipping = $this->makeShipping($fraudAnalysisObj->getShipping());
        }

        if($fraudAnalysisObj->getTravel()){
            $fraudAnalysis->Travel = $this->makeTravel($fraudAnalysisObj->getTravel());
        }

        return $fraudAnalysis;
    }

    private function makeBrowser($browserObj)
    {
        $browser = new StdClass();

        $browser->CookiesAccepted = $browserObj->getCookiesAccepted();
        $browser->Email = $browserObj->getCookiesAccepted();
        $browser->HostName = $browserObj->getHostName();
        $browser->IpAddress = $browserObj->getIpAddress();
        $browser->Type = $browserObj->getType();

        return $browser;

    }

    private function makeCart($cartObj)
    {
        $cart = new StdClass();

        $cart->IsGift = $cartObj->getIsGift();
        $cart->ReturnsAccepted = $cartObj->getReturnsAccepted();

        if($cartObj->getItems()){
            $cart->Items[] = $this->makeItems($cartObj->getItems());
        }

        return $cart;

    }

    private function makeItems($itemsObj)
    {
        $items = new StdClass();

        $items->GiftCategory = $itemsObj->getGiftcategory();
        $items->HostHedge = $itemsObj->getHostHedge();
        $items->NonSensicalHedge = $itemsObj->getNonSensicalHedge();
        $items->ObscenitiesHedge = $itemsObj->getObscenitiesHedge();
        $items->PhoneHedge = $itemsObj->getPhoneHedge();
        $items->Name = $itemsObj->getName();
        $items->Quantity = $itemsObj->getQuantity();
        $items->Sku = $itemsObj->getSku();
        $items->UnitPrice = $itemsObj->getUnitPrice();
        $items->Risk = $itemsObj->getRisk();
        $items->TimeHedge = $itemsObj->getTimeHedge();
        $items->Type = $itemsObj->getType();
        $items->VelocityHedge = $itemsObj->getVelocityHedge();

        return $items;
    }

    private function makeMerchantDefinedFields ($merchantDefinedFieldsObj)
    {
        $merchantDefinedFields  = new StdClass();

        $merchantDefinedFields->Id = $merchantDefinedFieldsObj->getId();
        $merchantDefinedFields->Value = $merchantDefinedFieldsObj->getValue();

        return $merchantDefinedFields;
    }

    private function makeShipping ($shippingObj)
    {
        $shipping  = new StdClass();

        $shipping->Addressee = $shippingObj->getAddressee();
        $shipping->Method = $shippingObj->getMethod();
        $shipping->Phone = $shippingObj->getPhone();

        return $shipping;
    }

    private function makeTravel ($travelObj)
    {
        $travel  = new StdClass();

        $travel->JourneyType = $travelObj->getJourneyType();
        $travel->DepartureTime = $travelObj->getDepartureTime();

        if($travelObj->getPassengers()){
            $travel->Passengers[] = $this->makePassengers($travelObj->getPassengers());
        }


        return $travel;
    }

    private function makePassengers ($passengersObj)
    {
        $passengers  = new StdClass();

        $passengers->Name = $passengersObj->getName();
        $passengers->Identity = $passengersObj->getIdentity();
        $passengers->Status = $passengersObj->getStatus();
        $passengers->Rating = $passengersObj->getRating();
        $passengers->Email = $passengersObj->getEmail();
        $passengers->Phone = $passengersObj->getPhone();

        if($passengersObj->getTravelLegs()){
            $passengers->TravelLegs[] = $this->makeTravelLegs($passengersObj->getTravelLegs());
        }


        return $passengers;
    }

    private function makeTravelLegs ($travelLegsObj)
    {
        $travelLegs  = new StdClass();

        $travelLegs->Origin = $travelLegsObj->getOrigin();
        $travelLegs->Destination = $travelLegsObj->getDestination();

        return $travelLegs;
    }

}
