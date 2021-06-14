<?php

namespace Braspag;

use Braspag\Entities\CustomerEntity;
use Braspag\Entities\AddressEntity;
use Braspag\Entities\CreditCardEntity;
use Braspag\Entities\PaymentEntity;
use Braspag\Entities\CardOnFileEntity;
use Braspag\Entities\CryptoCurrencyEntity;
use Braspag\Requests\CreditCardRequest;
use Braspag\Clients\Braspag\Factories\FullTransactionFactory;
use Braspag\Clients\Braspag\Factories\SimpleTransactionFactory;
use Braspag\Clients\Braspag\Factories\AuthenticatedTransactionFactory;
use Braspag\ValidationRules\CreditCard\ValidationRules;
use Rakit\Validation\Validator;

class CreditCardTransactionold
{
    const SIMPLE_TRANSACTION = 1;
    const COMPLETE_TRANSACTION= 2;
    const AUTHENTICATED_TRANSACTION = 3;

    public function index(CreditCardRequest $creditCardRequest, $request = null
    )
    {
        $dataArray = json_decode($request, true);
        $data = json_decode($request);
        $typetransaction = $dataArray['TypeTransaction'] ?? 1;
        
        //Validando dados
        $validator = new Validator;
        $rules = ValidationRules::makeRules($typetransaction);

        $validation = $validator->make($dataArray, $rules);
        $validation->validate();

        if ($validation->fails()) {
            $errors = $validation->errors();
            echo "<pre>";
               print_r($errors->firstOfAll());
            echo "</pre>";
        
            exit;

        } else {
            //echo "Success!";
        }

        $creditCardRequest = new CreditCardRequest;

        $creditCardRequest->setCustomerEntity($this->customer($data));
        $creditCardRequest->setPaymentEntity($this->payment($data));
        $creditCardRequest->setIsCryptoCurrencyNegotiationEntity($this->isCryptoCurrencyNegotiation($data));

        if (self::COMPLETE_TRANSACTION == $data->Transaction) {
            
            $creditCardRequest->setTypeEntity($this->type($data));
            $creditCardRequest->setAmountEntity($this->amount($data));
            $creditCardRequest->setTicketNumberEntity($this->arlineData($data));
            
            $fullTransactionFactory = new FullTransactionFactory($creditCardRequest);
            return $fullTransactionFactory->make();       

        }else if(self::SIMPLE_TRANSACTION == $data->Transaction){
            
            $simpleTransactionFactoy = new SimpleTransactionFactory($creditCardRequest);
            return $simpleTransactionFactoy->make();        
           
        }else if(self::AUTHENTICATED_TRANSACTION == $data->Transaction){

            $authenticatedTransactionFactory = new AuthenticatedTransactionFactory($creditCardRequest);
            return $authenticatedTransactionFactory->make();
            
        }
    }

    private function customer($data)
    {

          $costumerEntity = new CustomerEntity();
          $costumerEntity->setName($data->Customer->Name);

          if(self::COMPLETE_TRANSACTION == $data->Transaction){
            $costumerEntity->setEmail($data->Customer->Email);
            $costumerEntity->setBirthdate($data->Customer->Birthdate);
            $costumerEntity->setAddress($this->address($data));
            $costumerEntity->setDeliveryAddress($this->deliveryAddress($data));

           
          }
          return $costumerEntity;
    }

    private function address($data)
    {
        $addressEntity = new AddressEntity();

        $addressEntity->setStreet($data->Customer->Address->Street);
        $addressEntity->setNumber($data->Customer->Address->Number);
        $addressEntity->setComplement($data->Customer->Address->Complement);
        $addressEntity->setZipCode($data->Customer->Address->ZipCode);
        $addressEntity->setCity($data->Customer->Address->City);
        $addressEntity->setState($data->Customer->Address->State);
        $addressEntity->setCountry($data->Customer->Address->Country);

        return $addressEntity;

    }

    private function deliveryAddress($data)
    {
        $deliveryAddressEntity = new AddressEntity();

        $deliveryAddressEntity->setStreet($data->Customer->DeliveryAddress->Street);
        $deliveryAddressEntity->setNumber($data->Customer->DeliveryAddress->Number);
        $deliveryAddressEntity->setComplement($data->Customer->DeliveryAddress->Complement);
        $deliveryAddressEntity->setZipCode($data->Customer->DeliveryAddress->ZipCode);
        $deliveryAddressEntity->setCity($data->Customer->DeliveryAddress->City);
        $deliveryAddressEntity->setState($data->Customer->DeliveryAddress->State);
        $deliveryAddressEntity->setCountry($data->Customer->DeliveryAddress->Country);
        
        return $deliveryAddressEntity;
    }

    private function payment($data)
    {

        $paymentEntity = new PaymentEntity();
       
        if(self::COMPLETE_TRANSACTION == $data->Transaction){

            $paymentEntity->setCurrency($data->Payment->Currency);
            $paymentEntity->setCountry($data->Payment->Country);
            $paymentEntity->setServiceTaxAmount($data->Payment->ServiceTaxAmount);
            $paymentEntity->setInstallments($data->Payment->Installments);
            $paymentEntity->setInterest($data->Payment->Interest);
            $paymentEntity->setCapture($data->Payment->Capture);
            $paymentEntity->setAuthenticate($data->Payment->Authenticate);
            $paymentEntity->setSoftDescriptor($data->Payment->SoftDescriptor);
            $paymentEntity->setCreditCard($this->creditCard($data));
            
            
            return $paymentEntity;
        }

        $paymentEntity->setType($data->Payment->Type);
        $paymentEntity->setAmount($data->Payment->Amount);
        $paymentEntity->setInstallments($data->Payment->Installments);
        $paymentEntity->setSoftDescriptor($data->Payment->SoftDescriptor);
        if(self::AUTHENTICATED_TRANSACTION == $data->Transaction){
            $paymentEntity->setReturnUrl($data->Payment->ReturnUrl);
        }
        $paymentEntity->setCreditCard($this->creditCard($data));
       
        return $paymentEntity;
    }

    private function creditCard($data){

         $creditCardEntity = new CreditCardEntity();
         $creditCardEntity->setCardNumber($data->Payment->CreditCard->CardNumber);
         $creditCardEntity->setHolder($data->Payment->CreditCard->Holder);
         $creditCardEntity->setExpirationDate($data->Payment->CreditCard->ExpirationDate);
         $creditCardEntity->setSecurityCode($data->Payment->CreditCard->SecurityCode);
         
         
         if(self::COMPLETE_TRANSACTION == $data->Transaction){
             $creditCardEntity->setSaveCard($data->Payment->CreditCard->SaveCard);
         }
         $creditCardEntity->setBrand($data->Payment->CreditCard->Brand);
         $creditCardEntity->setCardOnFile($this->CardOnFile($data));
         
         return $creditCardEntity;
    }

    private function cardOnFile($data){
        $cardOnFileEntity = new CardOnFileEntity();

        $cardOnFileEntity->setUsage($data->Payment->CreditCard->CardOnFile->Usage);
        $cardOnFileEntity->setReason($data->Payment->CreditCard->CardOnFile->Reason);
        
        return $cardOnFileEntity;
    }

    private function isCryptoCurrencyNegotiation($data){
        $cryptoCurrencyEntity = new CryptoCurrencyEntity();
        $cryptoCurrencyEntity->setIsCryptoCurrencyNegotiation($data->Payment->IsCryptoCurrencyNegotiation);
        
        return $cryptoCurrencyEntity;
    }

    private function type($data){
        $paymentEntity = new PaymentEntity();
        $paymentEntity->setType($data->Payment->Type);

        return $paymentEntity;
    }
    private function amount($data){
        $paymentEntity = new PaymentEntity();
        $paymentEntity->setAmount($data->Payment->Amount);
        
        return $paymentEntity;
    }

    private function arlineData($data){

        $paymentEntity = new PaymentEntity();
        $paymentEntity->setArlineNumber($data->Payment->AirlineData->TicketNumber);

        return $paymentEntity;
    }


}