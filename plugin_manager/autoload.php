<?php

/* doctrine */
// require_once "vendor/autoload.php";

if( file_exists('config.php') ) {
    require_once 'config.php';
}

/* engine */
require_once 'module/engine/Project.php';
require_once 'module/engine/ParentController.php';
require_once 'module/engine/ViewManager.php';
require_once 'module/engine/Bundel.php';

/* bundle */
require_once 'bundle/Connect.php';
require_once 'bundle/TablesGenerator.php';
require_once 'bundle/Query.php';
require_once 'bundle/htmlFormBundle/Form.php';
require_once 'bundle/htmlTableBundle/HtmlTable.php';
require_once 'bundle/menuTreeBundle/MenuTree.php';
require_once 'bundle/menuTreeBundle/MenuTreeGenerator.php';

/* models */
require_once 'models/ParentModel.php';

/* admin controller */

/* admin views */

/* frontend controllers */
require_once 'module/frontend/controllers/Index.php';
require_once 'module/frontend/controllers/Upload.php';
require_once 'module/frontend/controllers/Search.php';

/* frontend views */

/* general controllers */
require_once 'module/general/controllers/MenuTree.php';

/* root */
require_once 'Router.php';

