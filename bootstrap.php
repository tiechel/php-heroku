<?php

require __DIR__.'/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
if (file_exists('.env')) {
    $dotenv->load(__DIR__);
}
