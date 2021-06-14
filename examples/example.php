<?php 

require '../vendor/autoload.php';

use Braspag\Requests\CreditCardRequest;
use Braspag\Entities\CustomerEntity;
use Braspag\Entities\AddressEntity;
use Braspag\CreditCardTransaction;


$address = new AddressEntity;
$address->setStreet('Avenida Ipiranga')
	->setNumber('104');


$costumerEntity = new CustomerEntity;
$costumerEntity->setName('Ewerson Carvalho');

echo '<pre>';
    print_r($costumerEntity);
echo '</pre>';
die();



$transaction = new CreditCardRequest; 
$transaction->setCustomerEntity($costumerEntity);




$make = new CreditCardTransaction;
$data = $make->make($transaction);

echo '<pre>';
print_r($data);
echo '</pre>';







