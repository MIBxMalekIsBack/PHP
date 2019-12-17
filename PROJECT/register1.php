<html><head><title>Register</title>
</head>
<body>

<style>
body{
	background-image: url(./image/background.jpg);
	background-size: cover;
}

.aa{
	width:260px;
	height:395px;
	background-color:rgb(105,105,105);
	margin:0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:50px;
	border:0;
	border-radius:5px;
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

input[type="email"]{
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
</style>
<script type="text/javascript">

    function Validate() 
	{
        var password = document.getElementById("pw").value;
        var confirmPassword = document.getElementById("rt").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	
	function check()   
	{  
		if (document.getElementById('un'||'pw'||'rt'||'e'||'p').value=="") 
		{   
			alert("PLEASE ENTER ALL FIELDS");
			return false;   
		}       
		return true;   
    } 
	
	function fonValidation(value)
	{
		if((value.length>11) || (value.length<10))
		{
			alert("Invalid Phone Number");
		}
	}
	

</script>
<div class=aa>
	<h2>Register</h2>
		<form method=post action=register2.php onsubmit="return !! (check() & Validate())">
			<input type=text placeholder="Username" name=un id=un><br>
			<input type=password placeholder="Password" name=pw id=pw maxlength=10><br>
			<input type=password placeholder="Retype Password" name=rt id=rt maxlength=10><br>
			<input type=email Placeholder="Email" name=e id=e><br>
			<input type=text Placeholder="Phone Number" name=p id="p" onchange="fonValidation(value)"><br>
			<input type=submit >
			<input type=reset value=reset >
	</form>
</div>
</body>
</html>