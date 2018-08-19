<?php
namespace System;

class Create
{
    CONST DS = DIRECTORY_SEPARATOR;
    private $class;
    private $table;
    private $var;

    public function CreateModel($class, $table, $var){

        /** 8/15/18
         ** is just a testing variable right now
         ** The next phase is to make a form and
         ** make it automagically create the gear
         ** After I do this I will then add a
         ** way for the user to add the Model
         ** along with the gear. ---FINISHED
         **/

        /** 8/16/18
         ** I created the function that makes a class. I still have to pass the variable
         ** to the database to make sure that it works and to make it so that
         ** it pulls the fields from the database. I also have to create the function
         ** to make the gear that matches the Model Class and I have to put
         ** them in their proper directories
         **/


        $createClass = fopen( APPLICATION_PATH . DS .'model' . DS . $this->class .".php", "w")
        or die("Unable to open file!");

        $code = "<?php";
        fwrite($createClass, $code);
        $code ="\nclass $class extends System\Models";
        fwrite($createClass, $code);
        $code ="{\n";
        fwrite($createClass, $code);

        $columns = \Database::GearColumnSelect($this->table);

        foreach($columns as $column){
            $code = "\n\tprotected \$$column;";
            fwrite($createClass, $code);
        }

        foreach($columns as $column){
            $code = "\n";
            fwrite($createClass, $code);
            $code="\n\tpublic function $column(){";
            fwrite($createClass, $code);
            $code ="\n\t \t \$this->$column = \$this->db['$column'];";
            fwrite($createClass, $code);
            $code = "\n\t \t return \$this->$column;";
            fwrite($createClass, $code);
            $code = "\n\t }";
            fwrite($createClass, $code);
        }
        $code ="\n}";
        fwrite($createClass, $code);
        fclose($createClass);
    }

    public function CreateGear($class, $table, $var){

        $this->table = $table;
        $this->class = $class;
        $this->var = $var;

        $createGear = fopen( APPLICATION_PATH . DS .'database' . DS .'gears' . DS . $this->class .".php", "w");
        $code = "<?php \n";
        fwrite($createGear, $code);
        $code = "\$table = '".$this->table ."';\n";
        fwrite($createGear, $code);
        $code = "\$var = '".$this->var."';";
        fwrite($createGear, $code);
        fclose($createGear);
    }

    public function CreateController(){

    }

    public function CreateView(){

    }
}