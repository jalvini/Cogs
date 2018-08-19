<?php
require(__DIR__ . DS . 'db.config.php');

class DatabaseCreate
{
    private $dbName;
    private $sql;
    private $conn;

    public static function Create($dbName){

        self::$dbName = $dbName;

        try {
            self::$conn = new PDO('mysql:host=' . SERVERNAME, DBUSERNAME , DBPASSWORD);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$sql = 'CREATE DATABASE $dbName';
            // use exec() because no results are returned
            self::$conn->exec(self::$sql);
            echo 'Database created successfully<br>';
        }
        catch(PDOException $e)
        {
            echo  'DID NOT CONNECT <br>' . $e->getMessage();
        }

        self::$conn = null;
    }
}