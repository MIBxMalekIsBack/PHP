<html><head><title>Admin Login</title></head>
<style>
body{
	background-image: url(./image/admin.jpg);
	background-size: cover;
}

.aa{
	width:260px;
	height:250px;
	background-color:rgb(105,105,105);
	margin:0 auto;
	margin-top:250px;
	padding-top:10px;
	padding-left:50px;
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
	width:90px;
	height:35px;
	border:0;
	border-radius:5px;
	font-weight:bolder;
}

</style>

<script>

function check()   
	{  
		if (document.getElementById('n').value=="" || document.getElementById('p').value=="" ) 
		{   
			alert("PLEASE ENTER ALL FIELDS");
			return false;   
		}       
		return true;   
    }

</script>

<body>

<div class=aa>
	<h2>Admin Login</h2>
		<form method=post action=admin2.php onsubmit="return check()">
			<input type=text placeholder="Username" name=adname id=n><br>
			<input type=password placeholder="Password" name=adpass id=p><br>
			<input type=submit value=Login>
	</form>
</div>

</body>
</html>