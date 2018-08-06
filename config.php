<?php

return [
    'consumerKey' => env('CONSUMER_KEY'),
    'consumerKeySercret' => env('CONSUMER_KEY_SECRET'),
    'accessToken' => env('ACCESS_TOKEN'),
    'accessTokenSecret' => env('ACCESS_TOKEN_SECRET'),
    
    'App\Service\AuthService' => DI\create()->constructor(
        DI\get('consumerKey'),
        DI\get('consumerKeySercret'),
        DI\get('accessToken'),
        DI\get('accessTokenSecret')
    ),
];
