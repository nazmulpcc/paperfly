<?php

return [
    /**
     * Paperfly credentials. They usually provide these
     * for the sandbox environment in the welcome email.
     */
    'username' => env('PAPERFLY_USERNAME'),
    'password' => env('PAPERFLY_PASSWORD'),
    'key' => env('PAPERFLY_KEY'),

    /**
     * GuzzleHttp Options
     * @see https://docs.guzzlephp.org/en/stable/request-options.html
     */
    'options' => [
        'base_uri' => env('PAPERFLY_BASE_URI', 'https://staging.paperfly-bd.com'),
    ],
];
