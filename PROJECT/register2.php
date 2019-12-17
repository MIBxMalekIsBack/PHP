<html><head><title>Register</title><head>
<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}
.aa{
	width:335px;
	height:270px;
	background-color:skyblue ;
	margin:0 auto;
	margin-top:100px;
	border-radius:15px;
}
h3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #6600FF;
	text-align: center;
}	

</style>
<body>
<div class=aa>
<?php
require("config.php"); 
$name = $_POST["un"];

$link = mysqli_connect($h,$r,$p,$db);

if ($_POST["pw"] == $_POST["rt"])
{
	
	$sql = "INSERT INTO test(username,password,email,phone) values ('$_POST[un]', '$_POST[pw]','$_POST[e]','$_POST[p]')";
	$result = mysqli_query($link,$sql) or die(mysqli_error($link));
	echo"<h1 style=color:red >Thank You For Register</h1>";
	echo "<h3>username = ".$_POST["un"]."</h3>";
	echo "<h3>email = ".$_POST["e"]."</h3>";
	echo "<h3>phone number = ".$_POST["p"]."<h3>";
	echo "<h1>_____________________</h1>";
	echo "<tr><td>. . . . . . . .You Have Successfully Registered. . . . . . .</td></tr><br>";	
	echo ". . . . . . . .  You Will Redirect to Login Page. . . . . . . .";
    echo "<meta http-equiv='refresh' content='3;url=login1.php'/>";
    die();
}
else
{
    echo"<h1>Failed to Register</h1>";
	echo "<p style=color:red>Password and retype wrong </p>";
}
?>
</div>
</body>
</html>