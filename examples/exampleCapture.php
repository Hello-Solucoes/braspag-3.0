<?php

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCapture;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("396a819a-eeb9-496c-acd7-1bded3685249");


$creditCardTransaction = new CreditCardTransactionCapture([
    'production'=> false,
    'consult'=> false
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->makeCapture($consult));









