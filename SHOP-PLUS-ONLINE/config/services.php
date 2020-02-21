<?php

return [


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
    'google' => [
        'client_id' => '378737756241-3kmu6ijih4hl6ajrf0g2rfu3iqoplrbp.apps.googleusercontent.com',
        'client_secret' => 'fXf3IrsqxuICwJNJDYrmRL8l',
        'redirect' => 'http://127.0.0.1:8000/auth/google/callback',
    ],

];
