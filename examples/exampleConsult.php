<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionConsult;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("f53bef0c-efc5-46ac-95f7-ed99dec4a365");


$creditCardTransaction = new CreditCardTransactionConsult([
    'production'=> false,
    'consult'=> true
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->make($consult));









