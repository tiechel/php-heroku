<?php

namespace App;

use DI\Container;

class ContainerBuilder
{
    public static function getInstance()
    {
        static $instance;
        if (!($instance instanceof Container)) {
            $builder = new \DI\ContainerBuilder();
            $builder->addDefinitions(__DIR__."/../config.php");
            $instance = $builder->build();
        }
        return $instance;
    }

}
