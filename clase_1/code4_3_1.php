<?php
	var_dump(isset($a));
	$a=null;
	echo" \n Existe a? \n </br>";
	var_dump(isset($a));
	$a=1;
	var_dump(isset($a));
	echo "<br>";
	echo"ahora si existe \n </br>";
	unset($a);
	var_dump(isset($a));
	echo "a ya no esta\n </br>";
	?>