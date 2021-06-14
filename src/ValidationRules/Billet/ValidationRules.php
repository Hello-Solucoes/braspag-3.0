<?php


namespace Braspag\ValidationRules\Billet;

class ValidationRules
{

    public function makeRules()
    {
        $rules = [
            'MerchantOrderId' => 'required|max:50',
            'Customer.Name' => 'max:60',
            'Customer.Identify'=>'numeric|max:10',
            'Customer.Address.Street' => 'required|max:255',
            'Customer.Address.Number' => 'required|max:15',
            'Customer.Address.Complement' => '|max:50',
            'Customer.Address.ZipCode' => 'required|max:9',
            'Customer.Address.District' =>'required|max:50',
            'Customer.Address.City' => 'required|max:50',
            'Customer.Address.State'=> 'required|max:2',
            'Customer.Address.Country' => 'required|max:35',
            'Payment.Type' => 'required|max:100',
            'Payment.Amount' => 'required|numeric',
            'Payment.Provider' => 'required|max:215',
            'Payment.Adress' => 'max:255',
            'Payment.BoletoNumber' => 'max:9',
            'Payment.Assignor' => 'max:200',
            'Payment.Demonstrative' => 'max:255',
            'Payment.ExpirationDate' => 'date|max:10',
            'Payment.Identification' => 'max:14',
            'Payment.Instructions' => 'max:255'
        ];

        return $rules;

    }

}