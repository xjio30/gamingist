<?php

return [

    /*
      |--------------------------------------------------------------------------
      | Third Party Services
      |--------------------------------------------------------------------------
      |
      | This file is for storing the credentials for third party services such
      | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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
        'client_id' => '1560340580935901',
        'client_secret' => 'ba39b089374f43083e7518952afd2039',
        'redirect' => 'http://laderino.conectabalear.net/callback/facebook',
    ],
    'twitter' => [
        'client_id' => 'EHHBNkGm7Wer9Uq1dcJHfOHVm',
        'client_secret' => '1Wpm0wAuqa7vATeSOnm2rCSaItHcLXKebEITPZ3pJAkpd1oh9O',
        'redirect' => 'http://laderino.conectabalear.net/callback/twitter',
    ],
    'google' => [
        'client_id' => '401937778845-7kpcnfh9nf3e5pg0jod5345sr5j2skpm.apps.googleusercontent.com',
        'client_secret' => 'R_k3MvT6yibj2Q3-uGpEsMJV',
        'redirect' => 'http://laderino.conectabalear.net/callback/google',
    ],
];
