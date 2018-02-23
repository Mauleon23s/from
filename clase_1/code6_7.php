<?php
$a=3;
$b=4;
$c="3";
$d="4";
var_dump($a==$c);  	//true
var_dump($a===$c);	//false
var_dump($a!=$c);	//false
var_dump($a<>$c);	//false
var_dump($a!==$c);	//true
var_dump($a<$b);	//true
var_dump($a>$b);	//false
var_dump($b<=$d);	//true
var_dump($b>=$d);	//true
var_dump($a<=>$b);	//-1
var_dump($b<=>$a);	//1
?>