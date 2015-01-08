<?php  
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('APPPATH', ROOT.DS.'app');
define('STORAGEPATH', APPPATH.DS.'storage');
define('CACHEPATH', STORAGEPATH.DS.'cache');

// environment 
define('ENV', isset($_ENV['ENVIRONMENT']) ? $_ENV['ENVIRONMENT'] : 'development');

// to slim environment 
$_ENV['SLIM_MODE'] = ENV;

// require autoload composer
if (file_exists('vendor'.DS.'autoload.php'))
    require 'vendor'.DS.'autoload.php';

// load configurations to database
require(APPPATH.DS.'load'.DS.'db.php');

$admin_template_path = 'templates'.DS.'admin';
$admin_template_url = 'templates/admin';

// Load Slim Framework
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

// Twig Templates
$view = $app->view();

$twig_parserOptions = array();
if ($app->getMode() == 'development')
    $twig_parserOptions['debug'] = true;

$twig_parserOptions['cache'] = CACHEPATH.DS.'templates';

$view->parserOptions = $twig_parserOptions;

// Routes
$app->group('/admin', function () use ($app) {

    // set default template
    $app->config('templates.path', ROOT.DS.$admin_template_path);

    $app->get('/', function ($name=null) use ($app) {
        echo "Hello, $name";

        $template_vars['load_local_files'] = true;
        $template_vars['site_name'] = 'in9 Tem <b>negrito</b>';
        $template_vars['template_url'] = $admin_template_url;

        $app->render('index.html', $template_vars);
    });

});

$app->get('/', function ($name=null) use ($app) {
    echo 'hi';
});


/*$app->get('/', function ($name=null) use ($app) {
    echo "Hello, $name";

    $template_vars['load_local_files'] = true;
    $template_vars['site_name'] = 'in9 Tem <b>negrito</b>';
    $template_vars['template_url'] = $admin_template_url;

    $app->render('index.html', $template_vars);
});*/

// Run application
$app->run();