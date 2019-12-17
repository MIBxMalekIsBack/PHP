<?php
session_start();
$username = "a";
$password="a";

//$_POST = variable from form
//$password = declare variable sndiri
if ($_POST["user"] == $username)
{
	if ($_POST["pass"] == $password){
		
		$_SESSION["u"]=$_POST["user"];
		header ("Location:homes.php");
	}
	else{
		echo "<h1>Hi $_POST[user]<h1>";
		echo "<br>";
		echo "<font color=red>Wrong password</font>";
		//header ("Location:Error.php");
	}
}
else
{
   echo "<h1>Hi $_POST[user]<h1>";
   echo "<br>";
   echo "<font color=red>Wrong username</font>";
}

?>