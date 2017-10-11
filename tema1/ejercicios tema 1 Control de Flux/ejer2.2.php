<?php
$var=$_GET["a"];
$result=0;
$i=0;

	while($i<(int)$var){

	$result=$i+$result;
	$i++;
}	
	echo $result+$var;
	
?>



