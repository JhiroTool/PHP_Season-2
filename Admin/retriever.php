<?php
    include("../connections.php");
    $retireve_query = mysqli_query($connections, "SELECT * FROM tbl_user");
    while($row_users = mysqli_fetch_assoc($retireve_query)){
        $id_user = $row_users["id_user"];
        $db_fisrt_name = $row_users["first_name"];
        $db_middle_name = $row_users["middle_name"];
        $db_last_name = $row_users["last_name"];
        $db_gender = $row_users["gender"];
        $db_preffix = $row_users["preffix"];
        $db_seven_digit = $row_users["seven_digit"];
        $db_email = $row_users["email"];
        $db_password = $row_users["password"];
        echo $db_fisrt_name . "<br>";
    }
?>  git config --global user.email "jhiroramir@gmail.com"
  git config --global user.name "Jhiro Tool"