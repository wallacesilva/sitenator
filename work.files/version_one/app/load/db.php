<?php

// get database configuration
$db_config = require(APPPATH.DS.'config'.DS.'database.php');

// set php active record connections
$connections = array();

foreach ($db_config as $key => $value) {
    
    if ($value['driver']=='sqlite') {
        
        $dsn_format = '%s://%s';

        $connections[$key] = sprintf($dsn_format, $value['driver'], $value['dbname']);

    } else {

        $dsn_format = '%s://%s:%s@%s:%s/%s?charset=%s';

        $connections[$key] = sprintf($dsn_format, 
                                        $value['driver'], $value['user'], $value['password'], 
                                        $value['host'], $value['port'], $value['dbname'], $value['charset']
                                    );

    }

}

// configure PHP Active Record / Models
ActiveRecord\Config::initialize(function($cfg) use ($connections)
{
    $cfg->set_model_directory(APPPATH.DS.'models');
    $cfg->set_connections(
        $connections // configuration environment 
    );

    # default connection is now production
    $cfg->set_default_connection( ENV );
});


// file: app/load/db.php