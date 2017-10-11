<?php

$var=$_GET["a"];
$result=$var;
$i=0;
	if((int)$var>0 && (int)$var<10){
	echo $var;
	while($i<9){
	$result=$var*$result;
	echo ", " . $result;	
	$i++;	
		}
	}else 
		echo "No es un valor valido";
?>
