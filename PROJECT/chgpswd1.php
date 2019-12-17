<?php
session_start();
?>
<html><head><title>Change Password</title>
</head>
<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}

.aa{
	width:260px;
	height:290px;
	background-color:rgba(105,105,105,105);
	margin:0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:50px;
	border:0;
	border-radius:15px;
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
	width:100px;
	height:35px;
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
<script type="text/javascript">

    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
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
<div class=aa>
	<h2>Change Password</h2>
		<form method=post action=chgpswd2.php>
			<input type=password placeholder="Old Password" name=op maxlength=10><br>
			<input type=password placeholder="New Password" name=np id="txtPassword" maxlength=10><br>
			<input type=password placeholder=Retype name=rt id="txtConfirmPassword"><br>
			<input type=submit onclick="return Validate()">
	</form>
</div>
</body>
</html>