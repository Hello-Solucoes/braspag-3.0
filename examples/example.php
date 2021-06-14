<?php 

require 'vendor/autoload.php';

use braspag\Requests\CreditCardRequest; 
use braspag\Entities\CustomerEntity;
use braspag\Entities\AddressEntity;
use braspag\CreditCardTransaction;


$address = new AddressEntity;
$address->setStreet('Avenida Ipiranga')
	->setNumber('104');

($address);

$costumerEntity = new CustomerEntity;
$costumerEntity->setName('Ewerson Carvalho')
	->setIdentity('4138663863')
	->setEmail('ewerson@e-htl.com.br')
	->setBirthdate('1992-06-08')
	->setAddress($address)
	->setDeliveryAddress($address);
	




$transaction = new CreditCardRequest; 
$transaction->setCustomerEntity($costumerEntity);




$make = new CreditCardTransaction;
$data = $make->make($transaction);

echo '<pre>';
print_r($data);
echo '</pre>';







