<?php

return [
    'database' => [
        'default' => [
            'username'  => '',
            'password'  => '',
            'dbname'    => '',
            'adapter'   => Frame\Database::MySQL,
            'host'      => '127.0.0.1',
            'port'      => 3306
        ],
    ],
    'secure'  => [
        'default'   => '',
        #'session'   => [
        #    'private'   => __DIR__ . '/session.key',
        #    'public'    => __DIR__ . '/session.pub',
        #]
    ],
];
