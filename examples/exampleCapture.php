<?php

require '../vendor/autoload.php';

use Braspag\Entities\PaymentEntity;
use Braspag\Http\Controllers\CreditCardTransactionCapture;
use Braspag\Http\Requests\CreditCardRequest;


$paymentEntity = new PaymentEntity;
$paymentEntity->setPaymentId("0255c38e-7031-4442-adad-3ebb059aca25");


$creditCardTransaction = new CreditCardTransactionCapture([
    'production'=> false,
    'consult'=> false,
    'MerchantId' => '273321f7-8daa-4904-86f9-0392f6b4cc8c',
    'MerchantKey' => 'XMYBOTJIDVCYYLHIWFGSVOFDXAJZUUHYUWZSSBPF'
]);

$consult = new CreditCardRequest;
$consult->setPaymentEntity($paymentEntity);

print_r($creditCardTransaction->makeCapture($consult));

print_r($creditCardTransaction->log());









