<html><head><title>Logged In</title><head>
<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}
.aa{
	width:315px;
	height:180px;
	background-color:skyblue ;
	margin:0 auto;
	margin-top:200px;
	border-radius:15px;
</style>
<body>
<div class=aa>
<?php
require("config.php");
session_start();

$name = $_SESSION["u"];
$oldpwd = $_POST["op"];
$newpwd = $_POST["np"];


$link = mysqli_connect($h,$r,$p,$db);
$sql = "select password from test where username='$name'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$oldpwddb = $row['password'];
{
	if ($oldpwd == $oldpwddb)
        {
			$update = "UPDATE test SET password='$newpwd' WHERE username='$name'";
			
			$ur = mysqli_query($link,$update);
				session_destroy();	
				echo"<br><br><br>";
				echo "<tr><td color=blue>You Have Successfully Change Your Password</td></tr><br><br>";	
				echo "Session is not active. Redirect to login page";
				echo "<meta http-equiv='refresh' content='3;url=login1.php'/>";
				die();
        }
        else {
            echo"<BR><h1 style=color:red>Password Wrong!!";
			echo "<meta http-equiv='refresh' content='3;url=chgpswd1.php'/>";
        }
	
}
?>
</div>
</body>
</html>