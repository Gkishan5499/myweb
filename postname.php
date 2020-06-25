<?php
if(isset($_POST["btn"]))
{
$n=$_POST["fname"];
$b=$_POST["addr"];
$c=$_POST["quli"];
$m=$_POST["gender"];
$d=$_POST["age"];
$f=$_POST["email"];

echo "Your name-".$n;
echo "<br>";
echo "Your address:-".$b;
echo"<br>";
echo "Your qulification:-".$c;
echo "<br>";
echo "Your gender:-".$m;
echo "<br>";
echo "Your age:-".$d;
echo "<br>";
echo "Your email- ".$f;
}
?>