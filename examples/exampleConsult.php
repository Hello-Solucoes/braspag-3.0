<?php

require '../vendor/autoload.php';

use BraspagApi\Entities\PaymentEntity;
use BraspagApi\Http\Controllers\CreditCardTransactionConsult;
use BraspagApi\Http\Requests\CreditCardRequest;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("c265860d-e88f-4fec-af51-fd379f0f63f3");


$creditCardTransaction = new CreditCardTransactionConsult([
    'production'=> false,
    'consult'=> true,
    'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
    'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF'
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->make($consult));
print_r($creditCardTransaction->log());






