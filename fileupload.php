<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		SELECT Photo:
		<input type="file" name="txtphoto">
		<br>
		<input type="submit" name="b1" value="UPLOAD">
	</form>
	<?php
	if(isset($_POST["b1"]))
	{
	$filename=$_FILES["txtphoto"]["name"];
	echo "File name:".$filename;
	echo"<br>";
	$tempfile=$_FILES["txtphoto"]["tmp_name"];
	echo "Temporary file:".$tempfile;
	move_uploaded_file($tempfile,"myfile/".$filename);
	echo "<br>";
	echo"File uploaded";
	echo "<br>";
	echo "<iframe src= 'myfile/".$filename."' height='1227px;%'width='900px'></iframe>";
	}

	
	?>


</body>
</html>