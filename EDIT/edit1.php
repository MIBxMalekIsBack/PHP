<?php
$link = mysqli_connect("localhost","root","","classTRY");
//if ($link) echo "ok";  check link or not
$sql = "select username,fullname from biodata";
$result = mysqli_query($link,$sql) or die("ERROR:".mysqli_error($link));
?>

<form method=post action=edit2.php>
<select name=u>

<?php
while($row=mysqli_fetch_array($result))
{
	echo "<option value=$row[username]>$row[fullname]</option>";
}

?>
</select>
<input type=submit>
</form>