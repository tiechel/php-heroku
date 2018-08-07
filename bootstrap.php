<?php

require __DIR__.'/vendor/autoload.php';

use App\ControllerResolver;

$dotenv = new Dotenv\Dotenv(__DIR__);
if (file_exists('.env')) {
    $dotenv->load(__DIR__);
}

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
