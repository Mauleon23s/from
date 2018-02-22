<?php
$a = 1;
$b = 2;
function Suma()
{
    global $a, $b;
    $b = $a + $b;
}
Suma();
echo $b;
?>
