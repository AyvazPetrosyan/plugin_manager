<?php
namespace frontend\controllers;

use engine\ParentController;
use engine\ViewManager;

class Search extends ParentController {

    public function indexAction()
    {
        $this->assignParams['viewPath'] = 'index/index.php';
        new ViewManager($this->assignParams);
    }
}