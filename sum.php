<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		1st No:
		<input type="number" name="t1">
		<br>
		<br>
		2nd No:
		<input type="number" name="t2">
		<br>
		<input type="submit" name="btn" value="Sub">
	</form>
	<?php
	if(isset($_POST["btn"]))
	{
		$a=$_POST["t1"];
		$b=$_POST["t2"];
		$c=$a-$b;
		echo "sub is " .$c;
	}
	else {
		echo "Button till not pressed";
	}
	?>


</body>
</html>