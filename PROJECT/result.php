<html><head><title>Fixtures & Result</title>
</head>
<style>
body{
	background-image: url(./image/background.jpg);
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
.body{
	width:665px;
	height:740px;
	position:relative;
	border: 1px solid black;
	overflow:hidden;
}
iframe{
	height:2000px;
	position:absolute;
	top:-200px;
	right:-300;
	left:-430;
	width:1500px;
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
<div class=body>
	<iframe src="http://www.manutd.com/en/Fixtures-And-Results/United-Fixtures-And-Results.aspx?month=&competition=" width="1300"height ="1500"></iframe>
</div>
</body>
</html>