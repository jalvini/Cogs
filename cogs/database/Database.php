<?php
require_once('DatabaseConnect.php');

class Database extends DatabaseConnect{

    protected static $database;
    protected static $stmt;
    protected static $records;
    protected static $row;
    protected static $fields;
    protected static $class;

    public static function Select($table, $var, $cond, $multi = false){
        // var_dump(func_get_args());

        /**
         *
         * @var  stmt im thinking about using the following and maybe limiting the gears a bit but this may
         *prove to be problematic WHERE CONCAT(field1, '', field2, '', fieldn) LIKE "Var"
         *
         */

        self::$stmt = self::con()->prepare("SELECT * FROM " . $table . " WHERE " . $var . "=:condition");
        self::$stmt->bindParam(':condition', $cond);
        self::$stmt->execute();

        if ($multi == true){
            self::$records = array();
            while (self::$row = self::$stmt->fetch()){
                array_push(self::$records , self::$row);
            }
            return(self::$records );
        }
        else {
            self::$database = self::$stmt->fetch();
            return (self::$database);
        }
    }

    public static function Insert(){
    /**
     *I still have to finish this method
     */
    }

    public static function Update(){
        /**
         *I still have to finish this method
         */
    }

    public static function Delete(){
        /**
         *I still have to finish this method
         */
    }

    public static function GearColumnSelect($class){
        self::$class = $class;
        self::$stmt = self::con()->prepare("SHOW COLUMNS FROM ". self::$class);
        self::$stmt->execute();
        self::$fields = self::$stmt->fetchAll(PDO::FETCH_COLUMN);
        return self::$fields;
    }

    public static function GearTableSelect(){
        self::$stmt = self::con()->prepare("SHOW TABLES");
        self::$stmt->execute();
        self::$fields = self::$stmt->fetchAll(PDO::FETCH_COLUMN);
        return self::$fields;
    }
}