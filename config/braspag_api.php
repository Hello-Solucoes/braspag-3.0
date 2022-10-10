<?php
/**
 * Created by PhpStorm.
 * User: mhssilva
 * Date: 28/09/2022
 * Time: 09:02
 */

use BraspagApi\Constants\Providers;

return [
    'only_consulting' => env('BRASPAG_API_ONLY_CONSULTING', false),
    'endpoint' => [
        'transaction' => env('BRASPAG_API_TRANSACTION_URL', 'https://apisandbox.braspag.com.br'),
        'consult' => env('BRASPAG_API_CONSULT_URL', 'https://apiquerysandbox.braspag.com.br'),
    ],
    'merchant_id' => env('BRASPAG_API_MERCHANT_ID', ''),
    'merchant_key' => env('BRASPAG_API_MERCHANT_KEY', ''),
    'provider' => [
        'default' => env('BRASPAG_API_PROVIDER', Providers::SIMULADO),
        'exceptions' => [
            548 => Providers::REDE
        ],
    ],
    'antifraud_enabled' => env('ANTIFRAUD_ENABLED', true),
    'antifraud_rules' => [
        'always_enabled' => env('ANTIFRAUD_ALWAYS_ENABLED', false),
        'agency_active_without_credit' => [],
        'agency_enabled' => true,
        'user_enabled' => true,
    ],
    'cardFlag' => [
        500 => 'Visa',
        501 => 'Master',
        502 => 'AmericanExpress',
        503 => 'DinersClub',
        504 => 'Elo',
        543 => 'Discover',
        997 => 'Homologacao',
        3000 => false,
    ],
    'administrative_fee_days' => env('CREDIT_CARD_ADMINISTRATIVE_FEE_DAYS', 30),
    'administrative_fee_days_percent' => env('CREDIT_CARD_ADMINISTRATIVE_FEE_DAYS_PERCENT', 3),
    'refund' => [
        'enabled' => true,
        'auto_refund_max_value' => 10000,
        'after' => '20 minutes ago',
        'air' => false,
        'air-hotel' => false,
    ],
];
