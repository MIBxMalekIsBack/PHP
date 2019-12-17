<html><head><title>Delete</title></head>
<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}
.aa{
	width:310px;
	height:200px;
	background-color:rgb(105,105,105);
	margin:0 auto;
	margin-top:200px;
	padding-top:10px;
	padding-left:50px;
	border-radius:15px;
	color:white;
	font-weight:bolder;
</style>
<body>
<?php
require("config.php");
$name = $_POST["pid"];
$link = mysqli_connect($h,$r,$p,$db);
$sql = "DELETE FROM test WHERE username = '$name'";
$result = mysqli_query($link,$sql);
echo"<div class=aa>";
if(!$result) 
{
	echo"<h1 style=color:red>Delete Unsucessful</h1>";
}
else
{
	echo"<h1 style=color:red>Delete Successful</h1>";
	echo "<h1>______^_^______</h1>";	
	echo "<tr><td color=blue>You Have Successfully Delete The User.</td></tr><br>";	
	echo "---------Redirect to home page---------";
	echo "<meta http-equiv='refresh' content='3;url=adminMenu.php'/>";
	die();
}
echo"</div>";
?>
</body>
</html>