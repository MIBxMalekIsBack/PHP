<html><head><title>Login</title>

<style type=text/css>
h1{
	color:red;
}

body{
	background-image: url(./image/building.jpg);
	background-size: cover;
}
.aa{
	width:260px;
	height:250px;
	background-color:rgba(0,0,0,0.4);
	margin:0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:50px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-borkder-radius:15px;
	color:white;
	font-weight:bolder;
}

input[type="text"]{
	display:block;
	width: 200px;
	height: 35px;
	padding:10px;
	font-size:inherit;
	background:#FAF6D9;
	border:0;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
input[type="password"]{
	display:block;
	width: 200px;
	height: 35px;
	padding:10px;
	font-size:inherit;
	background:#FAF6D9;
	border:0;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
}
input[type="submit"]{
	background-color:skyblue;
	width:100px;
	height:35px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	font-weight:bolder;
}

</style>

</head>
<?php
echo "<h1><marquee behavior = alternate>Welcome To Lab Quiz</marquee></h1>"; ?> 
<div class=aa>
<h2>Login</h2>

<form method=post action=AMHlogin2.php>

<input type=text placeholder=Username name=u><br>
<input type=password placeholder=Password name=p><br>
<input type=submit value=Login>

</form>
</div>
</body>
</html>
