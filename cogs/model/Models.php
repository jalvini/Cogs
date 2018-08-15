<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/14/18
 * Time: 11:33 AM
 */
class Models
{
    protected $db;
    protected $table;
    protected $var;

    public function __construct($username){

        $table = '';
        $var = '';

        /** @var  $var is equal to the statement that you are comparing your $input to.
         ** So lets say you are calling the database like so:
         ** SELECT * FROM users WHERE username = $theuser
         ** @var would be in place of username.
         * likewise @table would be your  table name where you are calling everything from.
         */

        $gear = get_called_class();
        if(file_exists(APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . $gear . '.php')) {
            require(APPLICATION_PATH . DS . 'database' . DS . 'gears' . DS . $gear . '.php');

            $this->db = Database::Select($table, $var, $username);
        }
    }
}