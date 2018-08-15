<?php
/**
 * Created by PhpStorm.
 * User: Joseph Alvini
 * Date: 08/13/18
 * Time: 08:47 PM
 */

class create
{
    public function __construct(){

        $myfile = fopen( "newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);

    }
}