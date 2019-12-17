<?php
session_start();
?>
<html><head><title></title></head>
<style>
body{
	background-image: url(./image/building.jpg);
	background-size: cover;
}
.aa{
	width:260px;
	height:290px;
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
<div class=aa>
<h2>Change Password</h2>
<form method=post action=AMHchgpswd2.php>
<input type=password placeholder="Old Password" name=op ><br>
<input type=password placeholder="New Password" name=np id="txtPassword"><br>
<input type=password placeholder=Retype name=rt id="txtConfirmPassword"><br>
<input type=submit onclick="return Validate()">
</form>
</div>
</html>