<?php

return [
    'paths' => ['api/*', '/*', 'web/*','sanctum/csrf-cookie', 'livros/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:3000'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'X-CSRF-TOKEN'],

    'exposed_headers' => ['X-CSRF-TOKEN'],

    'max_age' => 0,

    'supports_credentials' => true,
];
