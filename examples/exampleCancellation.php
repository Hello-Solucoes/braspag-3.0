<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCancellation;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("f53bef0c-efc5-46ac-95f7-ed99dec4a365")
    ->setAmount('10000');


$cancellation = new CreditCardRequest;
$cancellation->setPaymentEntity($paymentEntity);

$creditCardTransaction = new CreditCardTransactionCancellation([
    'production'=> false,
    'consult'=> false
]);;

print_r($creditCardTransaction->make($cancellation));









