<?php

require __DIR__.'/../bootstrap.php';

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), [
    'monolog.logfile' => 'php://stderr',
]);

// Our web handlers
$app->get('/', function() use($app) {
    $app['monolog']->addDebug('logging output');
    return 'hello root world';
});

$app->get('/webhook', function() use($app) {
    return 'crc response';
});

$app->run();
