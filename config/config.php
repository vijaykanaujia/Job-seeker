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
    /*'mysql' => [
        'host'          => '127.0.0.1',
        'username'      => 'hungryinterns',
        'password'      => '*61Smi6e',
        'db_name'        => 'admin_hungryinterns'
    ],*/
    'session'   =>[
        'session_name'  => 'user',
    ],
    'hash' => array(
        'algo_name' => 'sha512',
        'salt'      => 30,
    ),
];