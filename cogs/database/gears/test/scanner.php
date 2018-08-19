<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/14/18
 * Time: 12:03 AM
 */

class scanner
{
        public function list_tables()
        {
            $pdo = new PDO('mysql:host=207.246.122.110:3306;dbname=JobJab', 'jalvini', 'Makeda@2300');

            $sql = "SHOW TABLES";

            $statement = $pdo->prepare($sql);

            $statement->execute();

            $tables = $statement->fetchAll(PDO::FETCH_NUM);

            foreach($tables as $table){
                echo $table[0], '<br>';
            }
        }
}