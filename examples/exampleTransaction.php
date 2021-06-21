<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\CustomerEntity;
use Braspag\Entities\AddressEntity;
use Braspag\Entities\PaymentEntity;
use Braspag\Entities\CreditCardEntity;
use Braspag\Entities\CardOnFileEntity;
use Braspag\Entities\CredentialsEntity;
use Braspag\Entities\ExtraDataCollectionEntity;
use Braspag\Entities\MerchantOrderEntity;
use Braspag\CreditCardTransaction;


$address = new AddressEntity;
$deliveryAddress = $address;

$address->setStreet('Avenida Ipiranga')
	->setNumber('104')
    ->setComplement('sala 4')
    ->setZipCode("03589070")
    ->setCity("São Paulo")
    ->setState('SP')
    ->setCountry('BRA')
    ->setDistrict('República');

$deliveryAddress->setStreet('Avenida Ipiranga')
    ->setNumber('104')
    ->setComplement('sala 4')
    ->setZipCode("03589070")
    ->setCity("São Paulo")
    ->setState('SP')
    ->setCountry('BRA')
    ->setDistrict('República');

$costumerEntity = new CustomerEntity;
$costumerEntity->setName('Ewerson Carvalho')
	->setIdentity('4138663863')
    ->setIdentityType('CPF')
	->setEmail('ewerson@e-htl.com.br')
	->setBirthdate('1992-06-08')
    ->setIpAddress('127.0.0.1')
    ->setAddress($address)
    ->setDeliveryAddress($deliveryAddress);


$extraDataCollection = new ExtraDataCollectionEntity;
$extraDataCollection->setName('NomeDoCampo')
    ->setValue("ValorDoCampo");


$credentials = new CredentialsEntity;
$credentials->setCode("9999999")
    ->setKey('D8888888')
    ->setPassword('LOJA9999999')
    ->setUsername('#Braspag2018@NOMEDALOJA#')
    ->setSignature('001');

$cardOnFile = new CardOnFileEntity;
$cardOnFile->setUsage('Used')
    ->setReason('Unscheduled');

$creditCard = new CreditCardEntity;
$creditCard->setCardNumber('4551870000000181')
    ->setHolder("Simulado")
    ->setExpirationDate("12/2021")
    ->setSecurityCode('123')
    ->setBrand('Visa')
    ->setSaveCard(false)
    ->setAlias("")
    ->setCardOnFile($cardOnFile);

$paymentEntity = new PaymentEntity;
$paymentEntity->setProvider("Simulado")
    ->setType('CreditCard')
    ->setAmount("10000")
    ->setCurrency("BRL")
    ->setCountry('BRA')
    ->setInstallments(1)
    ->setInterest("ByMerchant")
    ->setCapture(true)
    ->setAuthenticate(false)
    ->setRecurrent(false)
    ->setSoftDescriptor("mensagem")
    ->setDoSplit(false)
    ->setCreditCard($creditCard)
    ->setCredentials($credentials)
    ->setExtraDataCollection($extraDataCollection);

$merchantOrderId = new MerchantOrderEntity;
$merchantOrderId->setMerchantOrderId('2017051001');

$transaction = new CreditCardRequest;
$transaction->setMerchantOrderIdEntity($merchantOrderId)
    ->setCustomerEntity($costumerEntity)
    ->setPaymentEntity($paymentEntity);

$creditCardTransaction = new CreditCardTransaction([
    'production'=> false,
    'consult'=> false
]);

$data = $creditCardTransaction->make($transaction);
print_r($data);







