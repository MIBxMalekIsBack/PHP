<?php
session_start();
echo "<h1> Welcome $_SESSION[u]</h1>";
echo"<br>";
require("menu.php");
   if (!isset($_SESSION["u"])) {
   echo "Session is not active. Redirect to login page";
   echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
   die();
}
?>

