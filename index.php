<?php
    if(isset($_POST["btn_1"])){
        echo "Napindot ko na si 1st button";
    }
    if(isset($_POST["btn_2"])){
        echo "Napindot ko na si 2nd button";
    }
?>

<form action="POST">
    <input type="submit" name="btn_1" value="1st Button">
    <input type="submit" name="btn_2" value="2nd Button">
</form>