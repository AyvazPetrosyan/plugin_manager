<?php

namespace engine;

use engine\Project;

class ParentController extends Project
{

    protected $projectInfo;

    protected $assignParams;

    public function __construct($projectInfo)
    {
        $this->projectInfo = $projectInfo;
        $this->assignParams['rootDir'] = $projectInfo['rootDir'];
        $this->assignParams['moduleName'] = $projectInfo['moduleName'];

        $rootDir = $projectInfo['rootDir'];

        $this->assignParams['topBarMenuTree'] = [
            'main'        => ['menu' => FALSE, 'href' => "/$rootDir/frontend",          'name' => 'Plugin manager'],
            'upload'      => ['menu' => FALSE, 'href' => "/$rootDir/frontend/Upload",   'name' => 'Upload plugin'],
            'search'      => ['menu' => FALSE, 'href' => "/$rootDir/frontend/Search",   'name' => 'Search plugin'],
            'settings'    => ['menu' => FALSE, 'href' => "/$rootDir/frontend/Settings", 'name' => 'Settings']

            /*'settings' => [
                'menu' => TRUE,
                'name' => 'Settings',
                'history' => [
                    'menu' => TRUE,
                    'name' => 'History',
                    'history1' => ['menu' => FALSE, 'href' => '/$rootDir/admin/Senders', 'name' => 'history 1']
                ],
                'install' => ['menu' => FALSE, 'href' => "/$rootDir/admin/Install", 'name' => 'install']
            ],*/
        ];
    }

    protected function redirectToController($moduleName = 'frontend', $controllerName = 'Index', $actionName = "index", $paramKey = null, $paramVal = null)
    {
        $rootDir = $this->projectInfo['rootDir'];
        $url = "$rootDir/$moduleName/$controllerName/$actionName/$paramKey/$paramVal";
        header("Location: /$url");
    }
}