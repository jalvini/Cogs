<?php
/*
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../../cogs'));

CONST DS = DIRECTORY_SEPARATOR;

require(APPLICATION_PATH . DS . 'config' . DS . 'config.php');
require (APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . 'create' . DS . 'index.php');
include(APPLICATION_PATH . 'database' . DS . 'gears' . DS . 'test' . DS . 'scanner.php');

$scanner = new scanner();
$scanner->list_tables();
*/
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../../cogs'));

CONST DS = DIRECTORY_SEPARATOR;

require(APPLICATION_PATH . DS . 'core' . DS . 'config.php');
require (APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . 'create' . DS . 'index.php');
include(APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . 'test' . DS . 'scanner.php');
include(APPLICATION_PATH . DS . 'database' . DS . 'Database.php');

$records = Database::Select('users', 'Country', 'US', True);
foreach($records as $record){
    $user = new TestUser($record['username']);
}
