<?php
namespace frontend\controllers;

use engine\ParentController;
use engine\ViewManager;

class Upload extends ParentController {

    public function indexAction()
    {
        $this->assignParams['viewPath'] = 'upload/index.php';
        new ViewManager($this->assignParams);
    }

    public function saveAction()
    {
        $this->assignParams['viewPath'] = 'upload/upload.php';
        new ViewManager($this->assignParams);

    }
}