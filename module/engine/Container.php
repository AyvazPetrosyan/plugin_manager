<?php

namespace engine\container;

use engine\Bundle;

class Container extends Bundle
{
    private $projectInfo;

    private $urlInfo;

    private $rootDir;

    public function __construct($projectInfo, $urlInfo)
    {
        $this->projectInfo = $projectInfo;
        $this->urlInfo = $urlInfo;
        $this->rootDir = $projectInfo['rootDir'];
    }

    public function getProjectInfo()
    {
        return $this->projectInfo;
    }

    public function getUrlInfo()
    {
        return $this->urlInfo;
    }

    public function getRootDir()
    {
        return $this->rootDir;
    }
}