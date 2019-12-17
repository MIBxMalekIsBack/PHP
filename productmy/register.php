<?php
require("config2.php");

$link = mysqli_connect($h,$u,$p,$db);
$sql = "insert into product (username, password, name, gender) values ('$_POST[uname]', '$_POST[pswd]','$_POST[fullname]','$_POST[gndr]')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));{
	echo "done register";
}
?>