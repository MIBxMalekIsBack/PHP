<?php
$r = $_POST["usern"];
require("config.php");
session_start();

$link = mysqli_connect($host,$user,$password,$database); //connect to db
//$sql = "select * from user where username='$_POST[usern]'";  //tutup sebab guna $r
$sql = "select * from user where username='$r'";
$result = mysqli_query($link,$sql); //execute the query

if (mysqli_num_rows($result) > 0) { // if 1>0 (record exists in db)
    $row = mysqli_fetch_array($result);
        if ($_POST["pass"] == $row["password"]) { // if form pass same with password in db
            //$_SESSION["u"] = $_POST["usern"]; //create session and assign value   //tutup sebab guna $r
			$_SESSION["u"] = $r; //create session and assign value
			header("Location:home.php"); //redirect page to home.php
        }
        else {
            echo"<BR>Password Wrong";
        }
	
}
else {
    echo"<BR>User Not Found";
}
?>