<?php
namespace engine;

use engine\container\Container;

abstract class Project {

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function customDebug($param)
    {
        echo '<pre>';
            print_r($param);
        echo '</pre>';
        die();
    }

    protected function getContainer()
    {
        return $this->container;
    }
}