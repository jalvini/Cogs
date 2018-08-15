<?php
require_once(__DIR__ . DS . 'config.php');
require_once(__DIR__ . DS . 'Model.php');
require_once(APPLICATION_PATH . DS . 'database' . DS . 'Database.php');

/** @var  $page */
$page = get('page',  'home');

/** @var  $controller */
$controller = $config['CONTROLLER'] . $page .  '.php';

/** @var  $view */
$view = $config['VIEW'] . $page .  '.phtml';

/** @var  $_error */
$_error = $config['VIEW'] . 'error.phtml';

/** @var $mainModel Pulling in all models in the model folder  */

$mainModel = new Model();
$mainModel->models();

if(file_exists($controller)){
    require($controller);
}
if (file_exists($view)){
    require($view);
}
else{
    require ($_error);
}