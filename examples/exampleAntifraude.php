<?php

require '../vendor/autoload.php';

use BraspagApi\Entities\AddressEntity;
use BraspagApi\Entities\BrowserEntity;
use BraspagApi\Entities\CardOnFileEntity;
use BraspagApi\Entities\CartEntity;
use BraspagApi\Entities\CredentialsEntity;
use BraspagApi\Entities\CreditCardEntity;
use BraspagApi\Entities\CustomerEntity;
use BraspagApi\Entities\ExtraDataCollectionEntity;
use BraspagApi\Entities\FraudAnalysisEntity;
use BraspagApi\Entities\ItemEntity;
use BraspagApi\Entities\MerchantDefinedFieldsDataEntity;
use BraspagApi\Entities\MerchantDefinedFieldsEntity;
use BraspagApi\Entities\MerchantOrderEntity;
use BraspagApi\Entities\PassengersEntity;
use BraspagApi\Entities\PaymentEntity;
use BraspagApi\Entities\ShippingEntity;
use BraspagApi\Entities\TravelEntity;
use BraspagApi\Entities\TravelLegsEntity;
use BraspagApi\Http\Controllers\AntiFraud;
use BraspagApi\Http\Requests\AntiFraudRequest;

$travelLegs = new TravelLegsEntity();
    $travelLegs->setOrigin("AMS")
        ->setDestination("GIG");


    $passengersEntity = new PassengersEntity();
    $passengersEntity->setName('Passenger Test')
        ->setIdentity("212424808")
        ->setStatus("Gold")
        ->setRating("Adult")
        ->setEmail("email@mail.com")
        ->setPhone("5564991681074")
        ->setTravelLegs($travelLegs);

    $travelEntity = new TravelEntity();
    $travelEntity->setJourneyType("OneWayTrip")
        ->setDepartureTime("2018-01-09 18:00")
        ->setPassengers($passengersEntity);
    $shippingEntity = new ShippingEntity();
    $shippingEntity->setAddressee("João das Couves")
        ->setMethod("LowCost")
        ->setPhone("551121840540");

    $merchantDefinedFieldsEntity = new MerchantDefinedFieldsDataEntity();

    $merchantDefinedFieldsEntity->setMerchanDefinesFieldsEntity(
        (new MerchantDefinedFieldsEntity)
            ->setId(2)
            ->setValue(100)

    );

    $merchantDefinedFieldsEntity->setMerchanDefinesFieldsEntity(
        (new MerchantDefinedFieldsEntity)
            ->setId(3)
            ->setValue(1020)

    );

    $merchantDefinedFieldsEntity->setMerchanDefinesFieldsEntity(
        (new MerchantDefinedFieldsEntity)
            ->setId(3)
            ->setValue(1020)

    );

    $itemEntity = new ItemEntity();
    $itemEntity->setGiftCategory("Undefined")
        ->setHostHedge("Off")
        ->setNonSensicalHedge("Off")
        ->setObscenitiesHedge("Off")
        ->setPhoneHedge("Off")
        ->setName("ItemTeste1")
        ->setQuantity(1)
        ->setSku("20170511")
        ->setUnitPrice(1000)
        ->setRisk("High")
        ->setTimeHedge("Normal")
        ->setType("AdultContent")
        ->setVelocityHedge("High");

    $cartEntity = new CartEntity();
    $cartEntity->setIsGift(false)
        ->setReturnsAccepted(false)
        ->setItems($itemEntity);


    $browserEntity = new BrowserEntity();
    $browserEntity->setCookiesAccepted(false)
        ->setEmail('comprador@braspag.com.br')
        ->setHostName('Teste')
        ->setIpAddress('127.0.0.1')
        ->setType("Chrome");

    $fraudAnalisys = new FraudAnalysisEntity();
    $fraudAnalisys->setSequence('AnalyseFirst')
        ->setSequenceCriteria('Always')
        ->setProvider('Cybersource')
        ->setCaptureOnLowRisk(false)
        ->setVoidOnHighRisk(false)
        ->setTotalOrderAmount(10000)
        ->setFingerPrintId('074c1ee676ed4998ab66491013c565e2')
        ->setBrowser($browserEntity)
        ->setCart($cartEntity)
        ->setMerchantDefinedFields($merchantDefinedFieldsEntity)
        ->setShipping($shippingEntity)
        ->setTravel($travelEntity);


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
        ->setExtraDataCollection($extraDataCollection)
        ->setFraudAnalysis($fraudAnalisys);


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

    $merchantOrderId = new MerchantOrderEntity;
    $merchantOrderId->setMerchantOrderId('2017051001');

    $antiFraudeRequest = new AntiFraudRequest();
    $antiFraudeRequest->setMerchantOrderIdEntity($merchantOrderId)
    ->setCustomerEntity($costumerEntity)
    ->setPaymentEntity($paymentEntity);

    $antiFraude = new AntiFraud();

    echo "<pre>";var_dump($antiFraude->make($antiFraudeRequest));exit;








