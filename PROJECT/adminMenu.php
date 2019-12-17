<?php
session_start();

if(!isset($_SESSION["adname"])){
	header("Location:adminMenu.php");
	exit();
}
?>
<html><head><title>Admin Menu</title></head>
<style>
body{
	background-image: url(./image/adminMenu.jpg);
	background-size: cover;
}

.nav{
	background-color:red;
	color: #000000;
	list-style:none;
	text-align:right;
	padding:10px 0 10px 0;
}
li{
	display: inline-block;
	padding-right: 50px;
	font-size:15px;
	font-weight:bold;
}
a{
	text-decoration:none;
	color:#000000;
	
}
a:hover{
	color:#c1c1c1;
}
.logo{
	color:#000000;
	float:left;
	padding-left:25px;
	font-size:20px;
	font-weight:bold;
}
</style>
<body>
<ul class="nav">
	<div class="logo">
		<a href="adminMenu.php">Home</a>
	</div>
	<li><a href="view.php">View User</a></li>
	<li><a href="delete1.php">Delete User</a></li>
	<li><a href="adminLogout.php"> Logout </a></li>
</ul>
</body>
</html>