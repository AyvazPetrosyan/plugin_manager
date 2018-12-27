<?php

namespace bundle\configGenerator;

use engine\Bundle;

class ConfigGenerator extends Bundle
{
    private $configFile = 'config.php';

    private $context = '
    <?php
                    $sqlConfig = [
                        "host"=>"localhost",
                        "user"=>"root",
                        "password"=>"",
                        "db"=>"plugin_manager"
                    ];';

    public function __construct()
    {

    }

    public function createConfigFile()
    {
        if ($this->checkConfigFile()) {
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

    public function checkConfigFile()
    {
        $result = false;

        if (file_exists($this->configFile)) {
            $result = true;
        }

        return $result;
    }
}
