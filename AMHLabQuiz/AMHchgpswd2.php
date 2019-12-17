<center>
<body bgcolor='#b3ffb3' text=red>

<?php
session_start();

$name = $_SESSION["u"];
$oldpwd = $_POST["op"];
$newpwd = $_POST["np"];


$link = mysqli_connect('localhost','root','','amhdb');
$sql = "select AMH_password from amhtable where AMH_username='$name'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($result);
$oldpwddb = $row['AMH_password'];
{
	if ($oldpwd == $oldpwddb)
        {
			$update = "UPDATE amhtable SET AMH_password='$newpwd' WHERE AMH_username='$name'";
			
			$ur = mysqli_query($link,$update);
				session_destroy();
				echo "<h1>^_^</h1>";	
				echo "<tr><td color=blue>You Have Successfully Change Your Password</td></tr><br>";	
				echo "Session is not active. Redirect to login page";
				echo "<meta http-equiv='refresh' content='3;url=AMHlogin.php'/>";
				die();
        }
        else {
            echo"<BR>Password Wrong";
        }
	
}
?>.
</body>