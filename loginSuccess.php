<?php
/**
 * Created by PhpStorm.
 * User: tmainali
 * Date: 6/2/16
 * Time: 11:40 AM
 */
session_start();
$host="localhost";
$sqlusernames="homestead";
$sqlpasswords="secret";
$db_name="firstwebsite";
$table_name="users";

//connection to the server and selected database
$con = mysqli_connect($host, $sqlusernames, $sqlpasswords, $db_name);
if(mysqli_connect_errno()){
    echo "Mysqli connection was not established:".mysqli_connect_errno();
}

$error = "";
if(isset($_POST["Submit"])){
    if(empty($_POST["myusername"]) || empty($_POST["mypassword"])){
        $error = "Both fields are required.";
    }else{
        //defining username and password
        $username = $_POST["myusername"];
        $password = $_POST["mypassword"];

        //checking where username and password exist or not
        $sqlQuery = "SELECT username, passwords FROM users WHERE username = '$username' AND passwords = '$password'";
        $result = mysqli_query($con, $sqlQuery);
        //var_dump($result);exit();
        $rowcount = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //creating session if the username and password are valid
        if(mysqli_num_rows($result) == 1){
            $_SESSION["myusername"] = $username;
            $_SESSION["mypassword"] = $password;
            header("location: Home.php");
        }else{
            $error = "Incorrect username or password";

        }

    }
    echo $error;
}



?>



