<html><head><title>Login</title><head>
<style>
body{
	background-image: url(./image/login1.jpg);
	background-size: cover;
}
.aa{
	width:270px;
	height:110px;
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
require("config.php"); 
$name = $_POST["n"];
session_start();

$link = mysqli_connect($h,$r,$p,$db) or die(mysqli_connect_error());
$sql = "SELECT * FROM test where username='$name'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_array($result);
        if ($_POST["p"] == $row["password"]) {
			$_SESSION["u"] = $name;
			header("Location:home.php");
        }
        else {
            echo"<BR><h1 style=color:red>Password Wrong!!";
			echo "<meta http-equiv='refresh' content='url=login1.php'>";
        }	
}
else {
    echo"<BR><h1 style=color:red>User Not Found!!<h1>";
	echo "<meta http-equiv='refresh' content='3;url=login1.php'/>";
}

?>
</div>
</body>
</html>