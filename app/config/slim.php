<?php

$config['slim'] = array(
    // Modular
    'modular'       => true,

    // Application
    'mode'          => 'development',

    // Debugging
    'debug'         => true,

    // Logging
    'log.writer'    => null,
    'log.level'     => \Slim\Log::DEBUG,
    'log.enabled'   => true,

    //View
    'view'          => new \Slim\Views\Twig(),
    'templates.path'=> PUBLIC_PATH.'templates',

    // HTTP
    'http.version' => '1.1',

    // Routing
    'routes.case_sensitive' => true
);