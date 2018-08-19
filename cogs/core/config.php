<?php
/**
 * For the Frontend links.
 */
if (isset($_SERVER['HTTPS']) &&
    strtolower($_SERVER['HTTPS']) == 'on') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

$config = [
    'CONTROLLER' => APPLICATION_PATH . DS . 'controller' . DS,
    'VIEW' => APPLICATION_PATH . DS . 'view' . DS,
    'MODEL' => APPLICATION_PATH . DS . 'core' . DS,
    'CORE_PATH' => APPLICATION_PATH . DS . 'core' . DS,
    'URL' => trim($_SERVER['REQUEST_URI'], '/'),
    'CHECK' => $_SERVER['REQUEST_URI'],
    'PUBLIC' => $protocol . $_SERVER['HTTP_HOST'],
];

/** @var $url
 * This will take the URL up top and for sub-directorie namespace the controller
 * if There is a subdirectory for example called Accounts and a page called test
 * the controller will be under namespace Accounts\test tis will avoid creating
 * duplicate classes in the unlikely event that it will happen.
 */

$url =[
    'URL' => str_replace('/', '\\', $config['URL']),
];


require ($config['CORE_PATH'] . 'functions.php');
