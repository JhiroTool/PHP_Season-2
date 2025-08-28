<?php
$first_name = $middle_name = $last_name = $gender = $preffix = $seven_digit = $email = "";
$first_nameErr = $middle_nameErr = $last_nameErr = $genderErr = $preffixErr = $seven_digitErr = $emailErr = "";
if(isset($_POST['btnRegister'])) {
    if (empty($_POST["first_name"])) {
        $first_nameErr = "Required!";
    } else {
        $first_name = $_POST["first_name"];
    }

    if (empty($_POST["middle_name"])) {
        $middle_nameErr = "Required!";
    } else {
        $middle_name = $_POST["middle_name"];
    }

    if (empty($_POST["last_name"])) {
        $last_nameErr = "Required!";
    } else {
        $last_name = $_POST["last_name"];
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Required!";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["preffix"])) {
        $preffixErr = "Required!";
    } else {
        $preffix = $_POST["preffix"];
    }

    if (empty($_POST["seven_digit"])) {
        $seven_digitErr = "Required!";
    } else {
        $seven_digit = $_POST["seven_digit"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Required!";
    } else {
        $email = $_POST["email"];
    }
    if($first_name && $middle_name && $last_name && $gender && $preffix && $seven_digit && $email) {
        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
            $first_nameErr = "Letra lang at space ang kailangan wag kang jejemon";
        }else{
            $count_fist_name = strlen($first_name);
            if($count_fist_name < 2 ){
                $first_nameErr = "Masyadong maiksi ang pangalan mo kapatid";
            }else{
                $count_middle_name = strlen($middle_name);
                if($count_middle_name < 2 ){
                    $middle_nameErr = "Masyadong maiksi ang middle name mo kapatid";
                }else{
                    $count_last_name = strlen($last_name);
                    if($count_last_name < 2 ){
                        $last_nameErr = "Masyadong maiksi ang last name mo kapatid";
                    }else{
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $emailErr = "Invalid email format";
                        } else {
                            $count_seven_digit = strlen($seven_digit);
                            if($count_seven_digit < 7 ){
                                $seven_digitErr = "brad kulang ang seven digit number mo";
                            }else{
                                function random_password($length = 5) {
                                    $str = "abcdefghijklmnopqrstuvwxyABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                                    $shuffled = substr(str_shuffle($str), 0, $length);
                                    return $shuffled;
                                }
                                $password = random_password(8);
                                include("connections.php");
                                mysqli_query($connections, "INSERT INTO tbl_user(first_name, middle_name, last_name, gender, preffix, seven_digit, email, password) 
                                VALUES ('$first_name', '$middle_name', '$last_name', '$gender', '$preffix', '$seven_digit', '$email', '$password')");
                                echo "<script>window.location.href='success.php';</script>";
                            }
                        }
                    }
                }
            }
        }
    }
}
?>

<style>
.error{
        color: red;
    }
.success{
    color: green;
}
</style>

<script type="application/javascript">
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            evt.preventDefault();
        }
    }
</script>

<form method="POST">
    <center>
        <table border="0" width="50%">
            <tr><td> <input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>"> <span class="error"><?php echo $first_nameErr; ?></span> </td></tr>
            <tr><td> <input type="text" name="middle_name" placeholder="Middle Name" value="<?php echo $middle_name; ?>"> <span class="error"><?php echo $middle_nameErr; ?></span> </td></tr>
            <tr><td> <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>"> <span class="error"><?php echo $last_nameErr; ?></span> </td> </tr>
            <tr>
                <td>
                    <select name="gender">
                        <option name="gender" value="">Select Gender</option>
                        <option name="gender" value="male" <?php if($gender == "male") {echo 'selected';} ?>>Male</option>
                        <option name="gender" value="female" <?php if($gender == "female") {echo 'selected';} ?>>Female</option>
                    </select><span class="error"><?php echo $genderErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <select name="preffix">
                        <option name="preffix" id="preffix" value="">Network Provider (Globe, Smart, Sun, TNT, TM etc.)</option>
                        <option name="preffix" id="preffix" value="0813" <?php if($preffix == "0813") {echo 'selected';} ?>>0813</option>
                        <option name="preffix" id="preffix" value="0817" <?php if($preffix == "0817") {echo 'selected';} ?>>0817</option>
                        <option name="preffix" id="preffix" value="0905" <?php if($preffix == "0905") {echo 'selected';} ?>>0905</option>
                        <option name="preffix" id="preffix" value="0906" <?php if($preffix == "0906") {echo 'selected';} ?>>0906</option>
                        <option name="preffix" id="preffix" value="0907" <?php if($preffix == "0907") {echo 'selected';} ?>>0907</option>
                    </select><span class="error"><?php echo $preffixErr; ?></span>
                    <input type="text" name="seven_digit" value="<?php echo $seven_digit; ?>" maxlength="7" placeholder="Other Seven Digits" onkeypress="return isNumberKey(event)"><span class="error"><?php echo $seven_digitErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"><span class="error"><?php echo $emailErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnRegister" value="Register">
                </td>
            </tr>
        </table>
            </center>
</form>

<?php
    include ("connections.php");
    $view_query = mysqli_query($connections, "SELECT * FROM tbl_user");
    echo "<table border='1', width='50%'>
        <tr>
            <th>Fisrtname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Preffix</th>
            <th>Seven Digit</th>
            <th>Email</th>
            <th>Password</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($view_query)) {
            $user_id = $row["id_user"];
            $db_fisrt_name = $row["first_name"];
            $db_middle_name = $row["middle_name"];
            $db_last_name = $row["last_name"];
            $db_gender = $row["gender"];
            $db_preffix = $row["preffix"];
            $db_seven_digit = $row["seven_digit"];
            $db_email = $row["email"];
            $db_password = $row["password"];

    echo "<tr>
            <td>$db_fisrt_name</td>
            <td>$db_middle_name</td>
            <td>$db_last_name</td>
            <td>$db_gender</td>
            <td>$db_preffix</td>
            <td>$db_seven_digit</td>
            <td>$db_email</td>
            <td>$db_password</td>
            
          </tr>";
} echo "</table>";
?>