<?php
require_once('DatabaseConnect.php');

class Database extends DatabaseConnect{

    public static function Select($table, $var, $cond, $multi = false){
        $stmt = self::con()->prepare("SELECT * FROM " . $table . " WHERE " . $var . "=:condition");
        $stmt->bindParam(':condition', $cond);
        $stmt->execute();

        if ($multi == true){
            $records = array();
            while ($row = $stmt->fetch()){
                array_push($records, $row);
            }
            return($records);
        }
        else {
            $db = $stmt->fetch();
            return ($db);
        }
    }

    public static function Insert(){

    }
}