<?php

namespace braspag;

use braspag\Entities\CustomerEntity;
use braspag\Entities\AddressEntity;
use braspag\Entities\PaymentEntity;
use braspag\Requests\BilletRequest;
use braspag\Clients\Braspag\Factories\TransactionBilletFactory;
use braspag\ValidationRules\Billet\ValidationRules;
use Rakit\Validation\Validator;

class BilletTransaction
{
    public function index($data)
    {
        $dataArray = json_decode($data,true);
        $data = json_decode($data);

       //Validando dados
       $validator = new Validator;
       $rules = ValidationRules::makeRules();

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
        
       $billetRequest = new BilletRequest();
       
       $billetRequest->setCustomerEntity($this->Customer($data));
       $billetRequest->setPaymentEntity($this->Payment($data));
         
       $transactionBilletFactory = new TransactionBilletFactory($billetRequest);

       return $transactionBilletFactory->make();

    }

    public function Customer($data)
    {

        $costumerEntity = new CustomerEntity();

        $costumerEntity->setName($data->Customer->Name);
        $costumerEntity->setIdentity($data->Customer->Identity);
        $costumerEntity->setAddress($this->Address($data));
        
        return $costumerEntity;
    }

    public function Address($data)
    {
        $addressEntity = new AddressEntity();

        $addressEntity->setStreet($data->Customer->Address->Street);
        $addressEntity->setNumber($data->Customer->Address->Number);
        $addressEntity->setComplement($data->Customer->Address->Complement);
        $addressEntity->setZipCode($data->Customer->Address->ZipCode);
        $addressEntity->setDistrict($data->Customer->Address->District);
        $addressEntity->setCity($data->Customer->Address->City);
        $addressEntity->setState($data->Customer->Address->State);
        $addressEntity->setCountry($data->Customer->Address->Country);
        
        return $addressEntity;

    }

    public function Payment($data)
    {

        $paymentEntity = new PaymentEntity();

        $paymentEntity->setType($data->Payment->Type);
        $paymentEntity->setAmount($data->Payment->Amount);
        $paymentEntity->setProvider($data->Payment->Provider);
        $paymentEntity->setAddress($data->Payment->Address);
        $paymentEntity->setBoletoNumber($data->Payment->BoletoNumber);
        $paymentEntity->setAssignor($data->Payment->Assignor);
        $paymentEntity->setDemonstrative($data->Payment->Demonstrative);
        $paymentEntity->setExpirationDate($data->Payment->ExpirationDate);
        $paymentEntity->setIdentification($data->Payment->Identification);
        $paymentEntity->setInstructions($data->Payment->Instructions);

        return $paymentEntity;
    }

}