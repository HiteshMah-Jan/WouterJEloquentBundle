<?php

$container->loadFromExtension('wouterj_eloquent', [
    'connections' => [
        'default' => ['database' => 'db'],
        'connection_1' => [
            'driver' => 'sqlite',
            'host' => 'local',
            'port' => NULL,
            'database' => 'foo.db',
            'username' => 'user',
            'password' => 'pass',
            'prefix' => 'symfo_',
        ],
    ],
    'default_connection' => 'connection_1',
]);
