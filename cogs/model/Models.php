<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/14/18
 * Time: 11:33 AM
 */
namespace System;
class Models
{
    protected $db;
    protected $table;
    protected $var;
    protected $gear;
    public function __construct($uservar){

        $this->gear = get_called_class();
        $table = '';
        $this->uservar = $uservar;

        /** @var  $var is equal to the statement that you are comparing your $input to.
         ** So lets say you are calling the database like so:
         ** SELECT * FROM users WHERE username = $theuser
         ** @var would be in place of username.
         * likewise @table would be your  table name where you are calling everything from.
         **/

        /** 8/16/18
         **
         ** I created the input for gears and everything works I now need to create a way
         **  that user can change their default input values like what column
         **  they want to search in.
         **
         **/

        if(file_exists(APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . $this->gear . '.php')) {
            require(APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . $this->gear . '.php');
            $this->table = $table;
            $this->var = $var;

            $this->db = \Database::Select($this->table, $this->var, $this->uservar);
        }
    }
}