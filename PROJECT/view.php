<html><head><title>View User</title>
</head>
<style>
body{
	background-color:#e5b292;
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

<table border=7>
<tr><th>No</th><th>Username</a></th><th>Email</a></th><th>Phone Number</th></tr>

<?php
require("config.php");
$link=mysqli_connect($h,$r,$p,$db) or die(mysqli_connect_error());

if (isset($_GET["sort"])){
	if ($_GET["sort"] == 1)
		$sql="SELECT * FROM test order by username";
}
else
	$sql="SELECT * FROM test";


$result = mysqli_query($link,$sql)or die(mysqli_error($link));
$x=1;
while ($row = mysqli_fetch_array($result)) 
{
	echo "<tr>".
	          "<td>$x</td>".
			  "<td>$row[username]</td>".
			  "<td>$row[email]</td>".
	          "<td>$row[phone]</td>".
			  "</tr>";
	$x++;
}

?>
</table>
</body>
<html>