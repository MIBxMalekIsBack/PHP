<?php
$link = mysqli_connect("localhost","root","","classTRY");
//if ($link) echo "ok";  check link or not
$sql = "select * from biodata where username = '$_POST[u]'";
$result = mysqli_query($link,$sql) or die("ERROR:".mysqli_error($link));
$row=mysqli_fetch_array($result)
?>

<form method=post action=edit3.php>
username: <input type=text name=us value=<?php echo $row[username]?> readonly=yes><br>
fullname: <input type=text name=fn value=<?php echo $_POST["u"];?>><br>
<!-- password: <input type=text name=pw value=<?php echo $_POST["u"];?>><br> -->
age: <input type=text name=ag value=<?php echo $_POST["u"];?>><br>
gender: <input type=text name=gn value=<?php echo $_POST["u"];?> disabled><br>
<input type=submit>
</form>