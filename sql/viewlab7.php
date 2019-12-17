<table border=7>
<tr><th>No</th><th><a>Username</a></th><th>>email</a></th><th>Phone Number</th></tr>

<?php
require("config.php");
$link=mysqli_connect($host,$user,$password,$database) or die(mysqli_connect_error());

if (isset($_GET["sort"])){
	if ($_GET["sort"] == 1)
		$sql="SELECT * FROM usertable order by gender";
}
else
	$sql="SELECT * FROM usertable";


$result = mysqli_query($link,$sql)or die(mysqli_error($link));
$x=1;
while ($row = mysqli_fetch_array($result)) 
{
	echo "<tr>".
	          "<td>$x</td>".
			  "<td>$row[username]</td>".
			  "<td>$row[email]</td>".
	          "<td>$row[phone]</td>".
			  "</tr>";
	$x++;
}

?>



</table>
