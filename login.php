<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" >
		USERNAME:
		<input type="text" name="txtname">
		<br>
		PASSWORD:
		<input type="password" name="pass">
		<br>
		<input type="submit" name="btn" value="LOGIN">
	</form>
	<?php
	if(isset($_POST["btn"]))
	{
		$a=$_POST["txtname"];
		$b=$_POST["pass"];

		 $u="kishan";
		 $p="1234";
		 $q="Ram";
		 $z="5678";
		 if($a==$u && $b==$p && $a==$q && $b==$z)
		 {
		 header("location:dashboard.php");
		 }else{
		 	echo "Wrong Username/Password";
		 }
	}
	?>

</body>
</html>