<?php
$var = 'Erik';
$Var = 'Juan';
echo "$var, $Var";      // imprime "Erik, Juan"

// $4site = 'no funciona';      // inválido; comienza con un número
$_4site = '<br/>esta si';     // válido; comienza con un guion bajo
$pingüino = 'emperador';    // válido; 'ü' es ASCII (Extendido) 129

echo $_4site;
echo "<br>";
echo "Mira un pingüino $pingüino";
?>
