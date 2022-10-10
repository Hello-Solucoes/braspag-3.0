<?php

require '../vendor/autoload.php';

use BraspagApi\Entities\AddressEntity;
use BraspagApi\Entities\CardOnFileEntity;
use BraspagApi\Entities\CredentialsEntity;
use BraspagApi\Entities\CreditCardEntity;
use BraspagApi\Entities\CustomerEntity;
use BraspagApi\Entities\ExtraDataCollectionEntity;
use BraspagApi\Entities\MerchantOrderEntity;
use BraspagApi\Entities\PaymentEntity;
use BraspagApi\Http\Controllers\CreditCardTransaction;
use BraspagApi\Http\Requests\CreditCardRequest;


$address = new AddressEntity;
$deliveryAddress = $address;

$address->setStreet('Rua Keia Nakamura')
    ->setNumber('104')
    ->setComplement('sala 4')
    ->setZipCode("08260240")
    ->setCity("São Paulo")
    ->setState('SP')
    ->setCountry('BRA')
    ->setDistrict('Colônia');

$deliveryAddress->setStreet('Rua Keia Nakamura')
    ->setNumber('104')
    ->setComplement('sala 4')
    ->setZipCode("08260240")
    ->setCity("São Paulo")
    ->setState('SP')
    ->setCountry('BRA')
    ->setDistrict('Colônia');

$costumerEntity = new CustomerEntity;
$costumerEntity->setName('Lucas Goiana')
    ->setIdentity('88432988014')
    ->setIdentityType('CPF')
    ->setEmail('teste@braspag.com.br')
    ->setBirthdate('1992-06-08')
    ->setIpAddress('127.0.0.1')
    ->setAddress($address)
    ->setDeliveryAddress($deliveryAddress);


$extraDataCollection = new ExtraDataCollectionEntity;
$extraDataCollection->setName('identificador')
    ->setValue("teste");

$cardOnFile = new CardOnFileEntity;
$cardOnFile->setUsage('Used')
    ->setReason('Unscheduled');


$credentials = new CredentialsEntity;
$credentials->setCode("9999999")
    ->setKey('D8888888')
    ->setPassword('LOJA9999999')
    ->setUsername('#Braspag2018@NOMEDALOJA#')
    ->setSignature('001');


$creditCard = new CreditCardEntity;
$creditCard->setCardNumber('5446196812806039')
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
    ->setAmount(810.99)
    ->setCurrency("BRL")
    ->setCountry('BRA')
    ->setInstallments(1)
    ->setInterest("ByMerchant")
    ->setCapture(false)
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
    'consult'=> false,
    'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
	'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF'
]);

print_r($creditCardTransaction->make($transaction));

//print_r($creditCardTransaction->log());
