
<HTML>
   

    <BODY>
       	<p>
		<?php
		$var=$_GET["code"];
		
		if($var<11){
	
		$i=0;
			while($i<11){
			echo $var . " x " . $i. " = ". $i*$var . "<br>";
			
			
			$i++;
			}
		}else
		echo "El numero no esta permitido";

		?>
	</p>
    </BODY>
</HTML>
