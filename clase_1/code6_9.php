<?php
$a=true;
$b=false;
var_dump(!$b);  	//true
var_dump($a and $b);	//false
var_dump($a or $a);	//true
var_dump($a xor $a);	//false
var_dump($a && $a);	//true
var_dump($b || $b);	//false
?>