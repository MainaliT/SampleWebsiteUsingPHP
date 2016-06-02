<?php
session_start();
$host="localhost";
$sqlusernames="homestead";
$sqlpasswords="secret";
$db_name="firstwebsite";
$table_name="users";

//connection to the server and selected database
$con = mysqli_connect($host, $sqlusernames, $sqlpasswords, $db_name);
if(mysqli_connect_errno()){
    $msg = "Mysqli connection was not established:".mysqli_connect_errno();
}
if(isset($_POST["register"])){

    //checking to see whether user name exist or not
    $username = $_POST["myusername"];
    $password = $_POST["mypassword"];

    $sqlQuery = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sqlQuery);
    $count = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //if does exist, echo back it already exist, otherwise create one.
    if(mysqli_num_rows($result) >= 1){
        exit("User Exists");
        $msg = "Sorry....This user is already exist....";
    }else{
        $sqlQuery = mysqli_query($con, "INSERT INTO users (username, passwords) VALUES('$username', '$password')");
        //exit("Attempt Insert");
        if($sqlQuery){
            //exit("Insert Complete");
            $msg = "Thank you! You are now register";
            

        }
    }

}

?>

<?php include "header.html";?>
<html>
<head><title>Register</title></head>
<body>
<?php if(isset($msg)){ ?>
    <p><?php echo $msg; ?></p>
<?php } ?>
<form method="post" action="">
    <fieldset>
        <legend>Sign up Form</legend>
        <table width="400" border="0" cellpadding="10" cellspacing="10">

            <!--<tr>
                <td style="font-weight: bold"><div align="right"><label for="email">Email: </label></div></td>
                <td><input name="email" type="email" class="input" size="25" required /></td>
            </tr>
-->

            <tr>
                <td style="font-weight: bold"><div align="right"><label for="name">User name:</label></div></td>
                <td><input name="myusername" type="text" class="input" size="25" required /></td>
            </tr>
            <tr>
                <td height="23" style="font-weight: bold"><div align="right"><label for="password">Password: </label></div></td>
                <td><input name="mypassword" type="password" class="input" size="25" required /></td>
            </tr>
            <tr>
                <td height="23"></td>
                <td><div align="right">
                        <input type="submit" name="register" value="Sign Up!" />
                    </div></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>