<?php

require(__DIR__ . DS . 'db.config.php');

class DatabaseConnect
{
    protected $con;

    public static function con(){
        try {
            $dsn = 'mysql:host=' . SERVERNAME . ';dbname=' . DBNAME . ';';
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $con = new PDO( $dsn, DBUSERNAME, DBPASSWORD , $opt);

            return $con;
        }
        catch(PDOException $err)
        {
            echo "Connection Failed: " . $err->getMessage();
        }
    }
}