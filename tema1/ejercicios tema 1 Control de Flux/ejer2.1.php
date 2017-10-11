<?php
	$palabra1=$_GET("a");
	$palabra2=$_GET("b");
	
	if(strlen($palabra1)>strlen($palabra2)){
		echo $palabra1;
		echo " con tiene una longitud de " .strlen($palabra1);
	}
	else{
		echo $palabra2;
		echo " con tiene una longitud de " .strlen($palabra2); 
}
?>
