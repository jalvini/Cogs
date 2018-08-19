<?php
include('create.php');
include('show.php');
include ( APPLICATION_PATH . DIRECTORY_SEPARATOR .'database' .DIRECTORY_SEPARATOR . 'Database.php');
use System\Create as Create;
use System\Show as Show;
@$class = $_POST['class'];
@$table = $_POST['table'];
@$var = $_POST['var'];

if (isset($_POST['class'])){
    if (isset($_POST['Model'])){
        $create = new Create();
        $create->CreateModel($class, $table, $var);
        $create->CreateGear($class, $table, $var);
    }
    elseif(isset($_POST['View'])){
        //Contents Here
        $placholder;
    }
}
?>

<form action="" method="POST">

    <input type="hidden" name="Model">

    <label>Table Name</label><br />
    <select name="table" id="table">
        <option value="">SELECT DATABASE TABLE</option>
    <?php foreach(Show::Tables() as $table){
        echo '<option value="' . $table . '">' . $table . '</option>';}
        ?>
    </select>
    <br />
    <label>Class</label><br />
    <input type="text" name="class" id="class">
    <br />
    <label>Var</label><br />
    <input type="text" name="var" id="var">
    <p>
    <input type="submit" value="Submit">
    </p>
</form>


<form action="" method="POST">

    <input type="hidden" name="View">
    <label>Name Your View</label>
    <input type="text" name="view" />
    <br />
    <input type="submit" value="Submit">
    </p>
</form>

