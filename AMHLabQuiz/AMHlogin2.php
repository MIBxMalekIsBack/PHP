			

<?php
$name = $_POST["u"];
session_start();

$link = mysqli_connect('localhost','root','','amhdb');
$sql = "select * from amhtable where AMH_username='$name'";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0) 
{
    $row = mysqli_fetch_array($result);
        if ($_POST["p"] == $row["AMH_password"]) {
			$_SESSION["u"] = $name;
			header("Location:AMHhome.php");
        }
        else {
            echo"<BR>Password Wrong";
        }
	
}
else {
    echo"<BR>User Not Found";
}

?>
</body>