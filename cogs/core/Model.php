<?php
namespace System;

class Model
{
    public function models(){

        $dir =scandir(APPLICATION_PATH . DS .'model' . DS);
        if (count($dir) >= 3){

            require_once(APPLICATION_PATH . DS . 'model' . DS . 'Models.php');

            foreach (glob( APPLICATION_PATH . DS . 'model' . DS . '*.php') as $filename)
            {
                if($filename != APPLICATION_PATH . DS . 'model' . DS . 'Models.php') {

                        require_once($filename);
                }
            }
        }

    }
}
