<?php
if ($_POST["p"] == $_POST["r"] )
{
	echo "<h1 style=color:red >Thank You For Register</h1>";
	echo "username is ".$_POST["u"]."";
	echo "<br>password is ".$_POST["p"]."";
	echo "<br>retype is ".$_POST["r"]."";
}
else
	echo"<h1>Failed to Register</h1>";
	echo "<p style=color:red>Password and retype wrong </p>";
?>