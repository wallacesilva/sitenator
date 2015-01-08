<?php 

$dev = array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '000000',
        'dbname'    => 'ws_sitenator',
        'port'      => 3306,
        'charset'   => 'utf8',
    );

$prod = array(
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'user'      => 'root',
        'password'  => '000000',
        'dbname'    => 'ws_sitenator',
        'port'      => 3306,
        'charset'   => 'utf8',
    );

$test = $prod;

return array(
    'development'   => $dev,
    'production'    => $prod,
    'testing'       => $test,
);

// file: app/config/database.php