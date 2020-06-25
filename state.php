<?php
$emp=[
	[1,"kishan","manager",50000],
	[2,"saurabh","salesman",4000],
	[3,"Pawan","Computer oprator",50000],
	[4,"Amit","Ceo",100000]
];
echo "<table border=2px cellpadding=5px  cellspacing=0px>";
foreach($emp as $v1){
	echo "<tr>";
	foreach($v1 as $v2){
		echo"<td>". $v2." </td>";
	}
	echo "</tr>";
}

/*for($row=0; $row < 4; $row++){
	echo "<tr>";
	for($col=0; $col <4 ; $col++) { 
	   echo"<td>". $emp[$row][$col] ."</td>";
	}
	echo "</tr>";
 
	# code...
}*/
echo"</table>";
?>