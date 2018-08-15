<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/14/18
 * Time: 12:25 AM
 */

class Model
{

    public function models(){
        $dir =scandir(APPLICATION_PATH . DS .'model' . DS);
        if (count($dir) >= 3){

            foreach (glob( APPLICATION_PATH . DS . 'model' . DS . '*.php') as $filename)
            {

                require_once($filename);
            }
        }
    }
}