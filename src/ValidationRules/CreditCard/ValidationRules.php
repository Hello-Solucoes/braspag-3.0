<?php


namespace Braspag\ValidationRules\CreditCard;

class ValidationRules
{
    const SIMPLE_TRANSACTION = 1;
    const COMPLETE_TRANSACTION= 2;
    const AUTHENTICATED_TRANSACTION = 3;

    public function makeRules($typetransaction = 1)
    {
        $rules['MerchantOrderId'] = 'required|max:50';
        $rules['Costumer.Name'] ='max:255' ;

        if(self::COMPLETE_TRANSACTION == $typetransaction) {
            $rules['Customer.Email'] = 'max:255';
            $rules['Customer.Birthdate'] = 'date';
            $rules['Costumer.Address.Street'] = 'max:255';
            $rules['Costumer.Address.Number'] = 'max:15';
            $rules['Customer.Address.Complement'] = 'max:50';
            $rules['Customer.Address.ZipCode'] = 'max:9';
            $rules['Customer.Address.City'] = 'max:50';
            $rules['Customer.Address.State'] = 'max:2';
            $rules['Customer.Address.Country'] = 'max:35';
            $rules['Customer.Address.Street'] = 'max:255';
            $rules['Customer.Address.Number'] = 'max:15';
            $rules['Customer.Address.Complement'] = 'max:50';
            $rules['Customer.DeliveryAddress.ZipCode'] = 'max:9';
            $rules['Customer.DeliveryAddress.City'] = 'max:50';
            $rules['Customer.DeliveryAddress.State'] = 'max:2';
            $rules['Customer.DeliveryAddress.Country'] = 'max:35';
            $rules['Payment.Currency'] = 'max:3';
            $rules['Payment.Country'] = 'max:35';
            $rules['Payment.ServiceTaxAmount'] = 'numeric|max:15';
        }

        if(self::SIMPLE_TRANSACTION == $typetransaction || self::AUTHENTICATED_TRANSACTION == $typetransaction){
            $rules['Payment.Type'] = 'required|max:100';
            $rules['Payment.Amount'] = 'required|numeric|max:999999999999';
        }

        $rules['Payment.Installments'] = 'required|numeric|max:2';

        if(self::COMPLETE_TRANSACTION == $typetransaction) {
            $rules['Payment.Interest'] = 'max:10';
            $rules['Payment.Capture'] = 'boolean';
            $rules['Payment.Authenticate'] = 'boolean';
        }

        $rules['Payment.SoftDescriptor'] = 'max:13';
        $rules['Payment.CreditCard.CardNumber'] = 'required|max:19';
        $rules['Payment.CreditCard.Holder'] = 'max:25';
        $rules['Payment.CreditCard.ExpirationDate'] = 'required|max:7';
        $rules['Payment.CreditCard.SecurityCode'] = 'max:4';

        if(self::COMPLETE_TRANSACTION == $typetransaction) {
            $rules['Payment.CreditCard.SaveCard'] = 'boolean';
        }

        $rules['Payment.CreditCard.Brand'] = 'required|max:10';
        $rules['Payment.CreditCard.CardOnFile.Usage'] = 'max:5';
        $rules['Payment.CreditCard.CardOnFile.Reason'] = 'max:15';
        $rules['Payment.IsCryptocurrencyNegotiation'] = 'boolean';

        if(self::COMPLETE_TRANSACTION == $typetransaction) {
            $rules['Payment.Type'] = 'required|max:100';
            $rules['Payment.Ammount'] = 'required|numeric|max:15';
            $rules['Payment.AirlineData.TicketNumber'] =  'alpha_dash|max:13';
        }

        return $rules;
    }
}