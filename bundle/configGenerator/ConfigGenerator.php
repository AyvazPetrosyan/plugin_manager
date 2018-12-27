<?php

namespace bundle\configGenerator;

use engine\Bundle;
use engine\container\Container;

class ConfigGenerator extends Bundle
{
    private $configFile = 'config.php';

    private $context;

    public function __construct(Container $container, $context)
    {
        $this->context = $context;
    }

    public function createConfigFile()
    {
        if(file_exists($this->configFile)){
            unlink($this->configFile);
        }

        $result = fopen("config.php", "w");

        return $result;
    }

    public function createContext()
    {
        $result = fwrite($this->configFile, $this->context);

        return $result;
    }
}
