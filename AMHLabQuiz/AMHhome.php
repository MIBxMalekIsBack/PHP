<html><head><title>Main Menu</title><head>

<style type=text/css>
body{
	background-image: url(./image/building.jpg);
	background-size: cover;
}
h1{
	color:blue;
}
</style>

<body>

<?php
session_start();
echo "<h1 align=left color=blue> Welcome $_SESSION[u]</h1>";
echo"<br>";
require("AMHmenu.php");
?>

</body>
</html>