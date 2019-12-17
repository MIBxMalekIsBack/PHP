<?php
$x=1;
 require ("config.php");
 $l = mysqli_connect($host,$user,$password,$database);
 //if($l) echo "connect";
 //if(!$l) echo "not connect";
 $s = "select username,password,fullname,gender from user";
 $rs = mysqli_query($l,$s);
 echo"<table border=2>";
 echo"<tr><td>Username</td>";echo"<td>Password</td>";echo"<td>Full Name</td>";echo"<td>Gender</td></tr>";

while ($row = mysqli_fetch_array($rs))
{
	echo"<tr>";
	echo "<td bgcolor=blue>$row[username]</td>";
	echo "<td>$row[password]</td>";
	echo "<td>$row[fullname]</td>";
	echo "<td>$row[gender]</td>";
	echo"<BR>";
	echo"</tr>";
}


echo"</table>"; 
 //echo $row[0]; echo $row[1]; echo $row[2]; echo $row[3];
 //$row = mysqli_fetch_array($rs);
 //echo $row[0]; echo $row[1]; echo $row[2]; echo $row[3];
 


?>