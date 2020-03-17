<?php

return [
	'app' => [
        'name'          => 'AppName',
    ],
    'mysql' => [
        'host'          => '127.0.0.1',
        'username'      => 'root',
        'password'      => '',
        'db_name'        => 'core_php_boilerplate'
    ],
    'session'   =>[
        'session_name'  => 'user',
    ],
    'hash' => array(
        'algo_name' => 'sha512',
        'salt'      => 30,
    ),
];