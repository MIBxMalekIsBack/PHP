<html><head><title>Logout</title>
</head>
<style>
body{
	background-image:url(./image/logout.jpg);
	background-size:cover;
}

body>div{
	margin:30;
}

.bye{
	width:400px;
	height:120px;
	background-color:skyblue;
	margin:40 auto;
	margin-top:80px;
	padding-top:10px;
	padding-left:0px;
	border-radius:15px;
	border-radius:15px;
	color:black;
	font-weight:bold
}
</style>
<center>
<body>
	<div class="bye">
		<h1>^_^</h1>
		<tr><td color=blue>You Have Successfully Logout</td></tr><br>
	</div>

<?php
session_start();
session_unset();
session_destroy();
echo "<meta http-equiv='refresh' content='3;url=login1.php'/>";
die();
?>

</body>
</html>