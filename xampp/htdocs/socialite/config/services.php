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
        'scheme' => 'https',
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
        'client_id' => '265229098117-oralhjm8pu0uvs38rfjgjfqvnje7d64i.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/callback/google',
      ], 

      'github' => [
        'client_id' => '0053a5034b18b41448e6',
        'client_secret' => 'c73b5f1a28057358a32a48a5de86a8ee22f1976e',
        'redirect' => 'http://127.0.0.1:8000/auth/github/callback',
    ],
];
