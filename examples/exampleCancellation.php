<?php 

require 'vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\PaymentEntity;
use Braspag\CreditCardTransactionCancellation;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("6088bfbf-8e73-4215-9976-33e15596bda7")
    ->setAmount('10000');


$cancellation = new CreditCardRequest;
$cancellation->setPaymentEntity($paymentEntity);

$creditCardTransaction = new CreditCardTransactionCancellation([
    'production'=> false,
    'consult'=> false
]);;

print_r($creditCardTransaction->cancellation($cancellation));









