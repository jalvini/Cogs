<?php
require(__DIR__ . DS . 'db.config.php');

class DatabaseConnect
{
    protected static $con;
    protected static $dsn;
    protected static $opt;

    public static function con(){

        try {
            self::$dsn = 'mysql:host=' . SERVERNAME . ';dbname=' . DBNAME . ';';
            self::$opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            self::$con = new PDO( self::$dsn, DBUSERNAME, DBPASSWORD , self::$opt);

            return self::$con;
        }
        catch(PDOException $err)
        {
            echo '<img src="../cogs/core/images/connectionFailed.png" style="width: 250px;"><h3> Connection Failed</h3><p style="color: darkred"><strong> ' . $err->getMessage() . '</strong></p>';
        }
    }
}