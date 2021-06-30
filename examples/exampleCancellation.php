<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCancellation;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("5bb74afb-4629-4c22-9876-c425775122f5")
    ->setAmount('10000');


$cancellation = new CreditCardRequest;
$cancellation->setPaymentEntity($paymentEntity);

$creditCardTransaction = new CreditCardTransactionCancellation([
    'production'=> false,
    'consult'=> false
]);;

print_r($creditCardTransaction->make($cancellation));

print_r($creditCardTransaction->log());









