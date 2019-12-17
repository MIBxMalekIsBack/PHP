<?php
require("config.php");

$link = mysqli_connect($h,$u,$p,$db);
$sql = "insert into product (id, name, date) values ('$_POST[pid]',' $_POST[pname]', now())";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));{
	echo "added successfully";
}





























?>