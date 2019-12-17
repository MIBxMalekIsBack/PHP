<html><head><title>Delete User</title></head>

<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}
.aa{
	width:350px;
	height:150px;
	background-color:#9B59B6;
	margin:0 auto;
	margin-top:150px;
	padding-top:10px;
	padding-left:50px;
	-webkit-border-radius:15px;
	color:white;
	font-weight:bolder;
}
select{
	display:block;
	width: 200px;
	height: 35px;
	padding:10px;
	margin-top:10px;
	font-size:inherit;
	background:#FAF6D9;
	border:0;
	border-radius:5px;
}
input[type="submit"]{
	background-color:skyblue;
	width:90px;
	height:35px;
	margin-top:-34px;
	margin-left:220px;
	border:0;
	border-radius:5px;
	font-weight:bolder;
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
<?php
require("config.php");
$link = mysqli_connect($h,$r,$p,$db);
$sql = "SELECT username FROM test";
$result = mysqli_query($link,$sql);
?>
<div class=aa>
<h2>Deleting User</h2>
<form method=post action=delete2.php>
<select name=pid>

<?php
while ($row = mysqli_fetch_array($result))
{
	 echo "<option value='" . $row['username'] ."'>" . $row['username'] ."</option>";
}

?>
</select>
<input type=submit value=DELETE>
</form>
</div>
</body>
</html>