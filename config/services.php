<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('pk_test_51IWeaaGbZUDH5gEQtPEBIhUnLuPjxhS9kvgmtTkc1SYb3dz97ddGWyWCEfvskxkOMDH7Dz7uvXV4x1Fn1X8fV8xd00PPFFhlB6'),
        'secret' => env('sk_test_51IWeaaGbZUDH5gEQ4etkzdwrzyDLk5zP9L5qJ8v8Wd0n1jL7OKJJPsoBUiyasewYltxaZjEJKSeGcuKaiCof3xUY00QJpzvJKM'),
//        'secret' => 'your-stripe-key-here',
    ],

    'braintree' => [
        'environment' => env('BT_ENVIRONMENT', 'sandbox'),
        'merchantId' => env('BT_MERCHANT_ID'),
        'publicKey' => env('BT_PUBLIC_KEY'),
        'privateKey' => env('BT_PRIVATE_KEY'),
    ],

    ''

];
