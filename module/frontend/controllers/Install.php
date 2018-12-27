<?php
namespace frontend\controllers;

use bundle\configGenerator\ConfigGenerator;
use bundle\TablesGenerator;
use engine\ParentController;
use engine\ViewManager;

class Install extends ParentController {

    public function indexAction()
    {
        $this->assignParams['viewPath'] = 'install/index.php';
        new ViewManager($this->assignParams);
    }

    public function installAction()
    {
        $sqlConfig = $this->projectInfo['sqlConfig'];

        $config = new ConfigGenerator();
        $config->createConfigFile();
        $config->createContext();

        /** @var TablesGenerator $tableCreator */
        $tableCreator = new TablesGenerator($sqlConfig);
        $dbResult = $tableCreator->createDB();
        if($dbResult){
            $tableResult = $tableCreator->createTables();
            $this->assignParams['result']['tableResult'] = $tableResult;
        }

        $this->assignParams['viewPath'] = 'install/install.php';
        $this->assignParams['result']['dbResult'] = $dbResult;

        new ViewManager($this->assignParams);
    }
}