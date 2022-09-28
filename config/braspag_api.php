<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 09:02
 */
return [
    'only_consulting' => false,
    'endpoints' => [
        'transaction' => env('BRASPAG_API_TRANSACTION_URL', 'https://apisandbox.braspag.com.br'),
        'consult' => env('BRASPAG_API_CONSULT_URL', 'https://apiquerysandbox.braspag.com.br'),
    ],
    'merchant_id' => env('BRASPAG_API_MERCHANT_ID', ''),
    'merchant_key' => env('BRASPAG_API_MERCHANT_KEY', '')
];
