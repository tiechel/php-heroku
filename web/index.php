<?php

require '../bootstrap.php';

$app = new Sliex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Sliex\Provider\MonologServiceProvider(), [
    'monolog.logfile' => 'php://stderr',
]);

// Our web handlers
$app->get('/', function() use($app) {
    $app['monolog']->addDebug('logging output');
    return 'hello root world';
});

$app->run();
