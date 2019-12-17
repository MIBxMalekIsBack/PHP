<html><head><title>Checking..</title></head>
<style>

body{
	background-image: url(./image/login1.jpg);
	background-size: cover;
}
.aa{
	width:300px;
	height:50px;
	background-color:skyblue ;
	margin:0 auto;
	margin-top:380px;
	padding-top:0px;
	padding-left:50px;
	border-radius:15px;

</style>
<body>
<div class=aa>
<?php
session_start();
if ($_POST["adname"]=="admin" && $_POST["adpass"]=="admin")
{
	$adname=$_POST["adname"];
	$_SESSION["adname"]=$adname;
	header("Location:adminMenu.php");
}
else
{
	echo"<h1 style=color:red>INVALID ADMIN<h1>";
	echo "<meta http-equiv='refresh' content='3;url=admin1.php'/>";
}

?>
</div>
</body>
</html>