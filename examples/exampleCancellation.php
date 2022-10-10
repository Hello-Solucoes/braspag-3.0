<?php

require '../vendor/autoload.php';

use BraspagApi\Entities\PaymentEntity;
use BraspagApi\Http\Controllers\CreditCardTransactionCancellation;
use BraspagApi\Http\Requests\CreditCardRequest;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("0255c38e-7031-4442-adad-3ebb059aca25")
    ->setAmount('10000');


$cancellation = new CreditCardRequest;
$cancellation->setPaymentEntity($paymentEntity);

$creditCardTransaction = new CreditCardTransactionCancellation([
    'production'=> false,
    'consult'=> false,
    'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
    'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF'
]);;

print_r($creditCardTransaction->make($cancellation));

print_r($creditCardTransaction->log());









