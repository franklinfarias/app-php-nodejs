<?php
return [
    'settings' => [
        // Monolog settings
        'logger' => [
            'name' => 'my-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];