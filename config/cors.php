<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Adjusted settings for cross-origin resource sharing to allow
    | communication between the React app and the API, ensuring
    | cookies can be set and sent with requests.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie', '*'],

    'allowed_methods' => ['*'],

    // 'allowed_origins' => array_map('trim', explode(',', env('CORS_ALLOWED_ORIGINS', '*'))),
    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => ['X-Auth-Token'],

    'max_age' => 0,

    'supports_credentials' => true,
];
