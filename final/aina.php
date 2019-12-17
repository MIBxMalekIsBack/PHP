I can see:
<ul>
<?php
$animal= array('horse'=>'atari','fish'=>'coaster','parrot'=>'Polly');
foreach ($animal as $key => $value)
{
	echo "<li> a $key named $value";
}
?></ul>