<center>
<body bgcolor='#ffffe6' text=black></body>
<?php
session_start();
session_destroy();
echo "<h1>Session is destroyed</h1>";
echo "<h1>^_^</h1>";
echo "<tr><td color=blue>You Have Successfully Logout</td></tr><br>";	
   echo "Session is not active. Redirect to login page";
   echo "<meta http-equiv='refresh' content='3;url=AMHlogin.php'/>";
   die();

?>