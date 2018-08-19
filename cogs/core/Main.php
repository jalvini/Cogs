<?php
require_once(__DIR__ . DS . 'config.php');
require_once(__DIR__ . DS . 'Model.php');
require_once(APPLICATION_PATH . DS . 'database' . DS . 'Database.php');
use System\Model as Model;

/** @var  $homeController  -- DEFAULT HOME CONTROLLER */
$homeController = $config['CONTROLLER'] . 'home.php';

/** @var  $controller */
$controller = $config['CONTROLLER'] . $config['URL'] . '.php';

/** @var  $viewpath -- This gives us the view to display if view is NOT the home page */
$viewpath = $config['VIEW'] . $config['URL'] . '.phtml';

/** @var  $view  -- This gives us the view to display if view IS the home page*/
$home = $config['VIEW'] . 'home.phtml';

/** @var  $_error -- The display if page not found*/
$_error = $config['VIEW'] . 'error.phtml';

/** @var $mainModel Pulling in all models in the model folder  */
$mainModel = new Model();
$mainModel->models();

/**
 *
 * Controllers get pulled from here.
 *
** @var  $controller
 *
 * Loads Initial Controller For Page
 *
 */

if(file_exists($controller)){
    require($controller);
    $controller = new $url['URL']();
}
elseif (!file_exists($controller) && $config['URL'] == null){
        require($homeController);
        $controller = new Home();
}

/**
 *
 * VIEWS get Pulled From Here
 *
 */

/**
 * Displays All Pages But Home */
if (file_exists($viewpath)){
    require($viewpath);
}
/**
 * Displays Default if Home Does Not Exist*/
elseif(!file_exists($config['VIEW'] . 'home.phtml') && $config['CHECK'] == '/'){
    $default = $config['CORE_PATH'] . 'default' . DS .'home.phtml';
    require($default);
}
/**
 * Displays Home Page if Home Page DOES Exist*/
elseif(file_exists($home) && $config['CHECK'] == '/'){
    require($home);
}
/**
 * Displays Error Page*/
else{
    require ($_error);
}