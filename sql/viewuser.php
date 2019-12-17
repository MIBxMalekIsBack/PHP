<?php
session_start();
   if (!isset($_SESSION["u"])) {
   echo "Session is not active. Redirect to login page";
   echo "<meta http-equiv='refresh' content='3;url=login.php'/>";
   die();
}
?>
<table border=1 width=100%>
<tr><td valign=top width=25%> <?php require("menu.php"); ?></td>
<td width=50%><?php require("viewlab7.php"); ?></td>
</tr></table>

