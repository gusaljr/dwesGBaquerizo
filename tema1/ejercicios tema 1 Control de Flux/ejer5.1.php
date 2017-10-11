<?php

$var = $_GET["x"];
$var2 = $_GET["y"];
$var_code = $_GET["code"];




switch ($var_code){
	case "sum":
		
		echo $var + $var2;
 break;
	case "menos":
		echo $var - $var2;
		break;
	case "multi":
		echo $var * $var2;
		break;
	case "divi":
		echo $var / $var2;
		break;
	case "resto":
		echo $var % $var2;
		break;
}




?>

