<?php

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCapture;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("5bb74afb-4629-4c22-9876-c425775122f5");


$creditCardTransaction = new CreditCardTransactionCapture([
    'production'=> false,
    'consult'=> false
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->makeCapture($consult));

print_r($creditCardTransaction->log());









