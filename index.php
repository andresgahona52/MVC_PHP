<?php
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',  realpath(dirname(FILE)).DS);
define('APP_PATH',ROOT.'application'.DS);

require_once  APP_PATH. 'config.php';
require_once  APP_PATH. 'Request.php';
require_once  APP_PATH. 'Bootstrap.php';
require_once  APP_PATH. 'controller.php';
require_once  APP_PATH. 'Model.php';
require_once  APP_PATH. 'View.php';
require_once  APP_PATH. 'Registro.php';


?>

