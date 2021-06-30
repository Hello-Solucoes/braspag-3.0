<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionConsult;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("5bb74afb-4629-4c22-9876-c425775122f5");


$creditCardTransaction = new CreditCardTransactionConsult([
    'production'=> false,
    'consult'=> true
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->make($consult));
print_r($creditCardTransaction->log());






