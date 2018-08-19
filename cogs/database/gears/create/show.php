<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/16/18
 * Time: 08:32 AM
 */
namespace System;

class Show
{
    public static $tables;

    public static function Tables(){
        self::$tables = \Database::GearTableSelect();
        return self::$tables;
    }
}