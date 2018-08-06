<?php

require __DIR__.'/../bootstrap.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\ControllerResolver;

$app = new Silex\Application();
$app['debug'] = true;
$app['resolver'] = new ControllerResolver();

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), [
    'monolog.logfile' => 'php://stderr',
]);

// Our web handlers
$app->get('/', function() use($app) {
    $app['monolog']->addDebug('logging output');
    return 'hello root world';
});

$app->get('/webhook', 'App\Controller\WebhookController::get');

$app->run();
