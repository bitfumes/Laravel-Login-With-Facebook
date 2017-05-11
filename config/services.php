<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1118144574980650',
        'client_secret' => '6c483ed330d661814afa8555b600f8e7',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '673196264301-uoie3c3h3rfja6qgv1t7k6qp0qe9cb0g.apps.googleusercontent.com',
        'client_secret' => 'OcxqytsWkeG1RkbIFU1z_LRM',
        'redirect' => 'http://localhost:8000/login/gplus/callback',
    ],

    'twitter' => [
        'client_id' => 'lHhqOeyDiu6x4vTtaUmueaYtP',
        'client_secret' => 'fRmjLQExCQdkZhq5XMMkpiBHzSRbQdg2Op2Pxc2OTvSlEqVWVP',
        'redirect' => 'http://www.localhost:8000/login/twitter/callback',
    ],
];
