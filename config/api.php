<?php

return [
    'v1' => [
        /**
         * What namespace should be applied to this collection of routes
         */
        'namespace' => '\\App\\Http\\API\\Controllers',

        /**
         * If you want to use specific prefix, set it.
         * Otherwise we use api version like api/v1/
         */
        'prefix' => 'api',

        /**
         * What middlewares should be applied to this version,
         * if it is empty, "api" will be applied automatically
         */
        'middlewares' => [],

        /**
         * If you wanna change the default route file set it here.
         * Otherwise we use dedicated route file for each version.
         */
        'routes' => 'routes/api.php',
    ]
];
