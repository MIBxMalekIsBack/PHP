<html><head>
<style></style>

<script>
if ((document.a.new.value == "") || (document.a.retype.value == ""))
	{
		alert("Enter all field");
		return false;
	}
		if (document.a.new.value != document.a.retype.value)
		{
			alert("new and retype are not same");
			return false;
		}
else
	return true;

</script>

<title></title></head>
<body>

<form name=a onsubmit="return check()" method=post action=a.php>

Username:<input type=text name=u><br>
Password:<input type=text name=p><br>
New Password:<input placeholder="New Password" type=text name=new><br>
Retype:<input placeholder="Retype Password" type=text name=retype><br>
<input type=submit>

</form></body></html>