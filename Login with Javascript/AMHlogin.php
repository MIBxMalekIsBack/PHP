<?php
$name=$_POST["n"];
$pass=$_POST["p"];

$link = mysqli_connect("localhost","root","","amhdblab");
$sql = "SELECT * FROM amhtablelab where username='$name'";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_array($result);
        if ($_POST["p"] == $row["password"]) {
			echo"Username is correct<br>";
			echo"Password is correct";
        }
        else {
            echo"<BR>Password Wrong";
        }
	
}
else {
    echo"<BR>User Not Found";
}




?>