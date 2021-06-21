<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionConsult;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("6088bfbf-8e73-4215-9976-33e15596bda7");


$creditCardTransaction = new CreditCardTransactionConsult([
    'production'=> false,
    'consult'=> true
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->make($consult));









