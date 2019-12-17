<?php
session_start();

if(!isset($_SESSION["u"])){
	header("Location:home.php");
	exit();
}
?>

<html><head><title>Home</title>
</head>

<style>
body{
	background-image: url(./image/home.jpg);
	background-size: cover;
	font-family:'Arial',serif;
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

.video{
	margin-top:60px;
	margin-left:360px;
}
</style>

<body>

<ul class="nav">
	<div class="logo">
		<a href="home.php">Home</a>
	</div>
	<li><a href="news.php"> News </a></li>
	<li><a href="result.php"> Result </a></li>
	<li><a href="chgpswd1.php"> Change Password</a></li>
	<li><a href="logout.php"> Logout </a></li>
</ul>
<div class=video>
	<iframe width="650" height="400" src="https://www.youtube.com/embed/p0OqzauIjww" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</body>
</html>