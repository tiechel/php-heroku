<?php

namespace App;
use App\ContainerBuilder;

class ControllerResolver extends \Symfony\Component\HttpKernel\Controller\ControllerResolver
{
    protected function instantiateController($class)
    {
        $di = ContainerBuilder::getInstance();
        return $di->make($class);
    }
}
