<?php
use Braspag\CreditCardTransaction;
use Braspag\BilletTransaction;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;

require '../../../vendor/autoload.php';




///$data = $_POST['json'];

/*
    Credit Card Request

$credicardTransiction = new CreditCardTransaction();
$data = '{"Transaction":"1","MerchantOrderId":"2014111703","Customer":{"Name":"Comprador crédito simples"}, "Payment":{"Type":"CreditCard","Amount":15700,"Installments":1,"SoftDescriptor":"123456789ABCD",  "CreditCard":{ "CardNumber":"1234123412341231", "Holder":"Teste Holder", "ExpirationDate":"12/2030","SecurityCode":"123","Brand":"Visa","CardOnFile":{"Usage": "Used","Reason":"Unscheduled"}},"IsCryptoCurrencyNegotiation": true}}';
$data = '{"Transaction":"2","MerchantOrderId":"2014111701","Customer":{"Name":"Comprador crédito completo", "Email":"compradorteste@teste.com", "Birthdate":"1991-01-02", "Address":{ "Street":"Rua Teste", "Number":"123", "Complement":"AP 123", "ZipCode":"12345987", "City":"Rio de Janeiro", "State":"RJ", "Country":"BRA" }, "DeliveryAddress": { "Street": "Rua Tesste", "Number": "123", "Complement": "AP 123", "ZipCode": "12345987", "City": "Rio de Janeiro", "State": "RJ", "Country": "BRA" } }, "Payment":{ "Currency":"BRL", "Country":"BRA","ServiceTaxAmount":0, "Installments":1, "Interest":"ByMerchant", "Capture":true, "Authenticate":false, "SoftDescriptor":"123456789ABCD", "CreditCard":{ "CardNumber":"1234123412341231", "Holder":"Teste Holder", "ExpirationDate":"12/2030", "SecurityCode":"123","SaveCard":"false", "Brand":"Visa", "CardOnFile":{ "Usage": "Used", "Reason":"Unscheduled" } }, "IsCryptoCurrencyNegotiation": true, "Type":"CreditCard", "Amount":15700, "AirlineData":{ "TicketNumber":"AR988983" } } }';
$data = '{"Transaction":"3","MerchantOrderId":"2014111903", "Customer": {"Name":"Comprador crédito autenticação"},"Payment":{"Type":"CreditCard","Amount":15700,"Installments":1,"Authenticate":true,"SoftDescriptor":"123456789ABCD","ReturnUrl":"https://www.cielo.com.br","CreditCard":{"CardNumber":"1234123412341231","Holder":"Teste Holder","ExpirationDate":"12/2030","SecurityCode":"123","Brand":"Visa","CardOnFile":{"Usage": "Used","Reason":"Unscheduled"}},"IsCryptoCurrencyNegotiation": true}}';
$data = json_encode($credicardTransiction->index($data));
echo '<pre>';
print_r($data);

*/

// Billet JSON
$data ='{"MerchantKey":"LUBEPULDSMXJDEGAZNDKTFMOOJUJVUEOZQMFMOKG","MerchantOrderId":"1223456","Customer":{"Name":"Comprador Teste Boleto","Identity": "1234567890","Address":{"Street": "Avenida Marechal Câmara","Number": "160","Complement": "Sala 934","ZipCode" : "22750012","District": "Centro","City": "Rio de Janeiro","State" : "RJ","Country": "BRA"}},"Payment":{"Type":"Boleto","Amount":15700,"Provider":"bradesco2","Address": "Rua Teste","BoletoNumber": "123","Assignor": "Empresa Teste","Demonstrative": "Desmonstrative Teste","ExpirationDate": "2020-12-31","Identification": "11884926754","Instructions": "Aceitar somente até a data de vencimento, após essa data juros de 1% dia."}}';

$billetTransaction = new BilletTransaction();
$data = json_encode($billetTransaction->index($data));
// $headers = [
//     'MerchantOrderId: 4677d42e893049e0b8d94726e87589c4',
//     'Content-Type: application/json',
//     'MerchantKey: LUBEPULDSMXJDEGAZNDKTFMOOJUJVUEOZQMFMOKG'
// ];
print_r($data);

$client = new Client();

$response = $client->request('POST', 'https://apisandbox.cieloecommerce.cielo.com.br/1/sales/',
    [
        'headers'  => [
            'MerchantKey'=> 'LUBEPULDSMXJDEGAZNDKTFMOOJUJVUEOZQMFMOKG',
            'MerchantId'=> '4677d42e893049e0b8d94726e87589c4',
            'Content-Type'=> 'application/json',
        ],
        'body'=> $data
    ]

);
echo'<pre>';
print_r($response);
// print_r($client);

//echo "<h1 style='text-transform:lowercase;'>LUBEPULDSMXJDEGAZNDKTFMOOJUJVUEOZQMFMOKG</h1>";