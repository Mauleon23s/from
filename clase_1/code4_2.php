<?php
$foo = 'Erik';                // Asigna el valor 'Erik' a $foo
$bar = &$foo; 
echo $bar;
echo '<br>';
echo $foo;  
echo '<br>';
               // Referenciar $foo vía $bar.
$bar = "Mi nombre es $bar";  // Modifica $bar...
echo $bar;
echo $foo;                   // $foo también se modifica.
?>
