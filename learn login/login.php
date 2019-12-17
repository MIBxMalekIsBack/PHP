<?php $p = "abc";
//try <marquee> only! cancel behavior=alternate (line 3)
echo "<marquee behavior = alternate>Hi Welcome</marquee>"; ?> 
<form method=post action=login2.php>
Username:<input type=text name=u ><br>
Password:<input type=text name=p  <?php echo $p ?> ><br>
<input type=submit>

</form>