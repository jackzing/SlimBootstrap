<?php
require_once __DIR__ . '/../vendor/autoload.php';

// depedency injection container
$container = require __DIR__ . '/services.php';

// sane runtime environment
$config = $container['config'];
error_reporting($config['php.error_reporting']);
ini_set('display_errors', $config['php.display_errors']);
ini_set('log_errors', $config['php.log_errors']);
ini_set('error_log', $config['php.error_log']);
date_default_timezone_set($config['php.date.timezone']);

session_start();

// load routes and run application
//$app = $container['app'];
//foreach (glob($config['path.routes'] . '*php') as $file) {
//    require_once $file;
//}
//$app->run();
