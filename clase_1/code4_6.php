<?php
$a = 1; /* ámbito global */
function test()
{
	$a = 2;
    echo $a; /* referencia a una variable del ámbito local */
}
echo $a."<br>dentro de la funcion\n";
test();
?>
