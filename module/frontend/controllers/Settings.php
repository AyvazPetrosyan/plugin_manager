<?php
namespace frontend\controllers;

use engine\ParentController;
use engine\ViewManager;

class Settings extends ParentController {

    public function indexAction()
    {
        $this->assignParams['viewPath'] = 'settings/index.php';
        new ViewManager($this->assignParams);
    }
}