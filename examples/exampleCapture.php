<?php

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCapture;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("2a7bbb83-4371-4499-9e09-b7bf666d5335");


$creditCardTransaction = new CreditCardTransactionCapture([
    'production'=> false,
    'consult'=> false
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->makeCapture($consult));









