<html><head><title>Login</title>
</head>
<?php
echo "<h1 style=color:goldenrod ><marquee behavior = alternate>Welcome To Old Trafford</marquee></h1>"; ?> 

<style>
body{
	background-image: url(./image/login1.jpg); 
	background-size: cover;
}

.aa{
	width:260px;
	height:250px;
	background-color:rgb(105,105,105);
	margin:0 auto;
	margin-top:290px;
	padding-top:10px; 
	padding-left:50px;
	border-radius:300px;
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
}
input[type="submit"]{
	background-color:skyblue;
	width:90px;
	height:35px;
	border:0;
	border-radius:5px;
	font-weight:bolder;
}
.regis{
	background-color:skyblue;
	width:100px;
	height:30px;
	padding-top:5px;
	border:0;
	border-radius:5px;
	font-weight:bolder;
	margin-top:-35px;
	margin-left: 100px;
}
.regis>a{
	color:black;
	text-decoration:none;
	font-size:18px;
	font-weight:bold;
	padding-left:15px;
}
a:hover{
	color:#c1c1c1;
}

.admin{
	background-color:goldenrod;
	width:90px;
	height:35px;
	border:0;
	border-radius:5px;
	font-weight:bolder;
	margin-top:-405px;
	margin-left:1250px;
	padding-top:10px;
	padding-left:10px
}
.admin>a{
	color:black;
	text-decoration:none;
	font-size:18px;
	font-weight:bold;
	padding-left:15px;
}
</style>

<script type="text/javascript">
	function check()   
	{  
		if (document.getElementById('n'||'p').value=="") 
		{   
			alert("PLEASE ENTER ALL FIELDS");
			return false;   
		}       
		return true;   
    } 
</script>

<body>
<div class=aa>

	<h2>User Login</h2>
		<form method=post action=login2.php onsubmit="return check()">
			<input type=text placeholder="Username" name=n id=n><br>
			<input type=password placeholder="Password" name=p id=p><br>
			<input type=submit value=Login>
				<div class="regis">
					<a href="register1.php">Register</a>
				</div>
		</form>
</div>
	<div class=admin><a href="admin1.php"> Admin </a></div>
</body>
</html>