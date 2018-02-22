<?php
// Funciona a partir de PHP 5.3.0
const CONSTANTE = 'Hola Mundo';
echo CONSTANTE;
// Funciona a partir de PHP 5.6.0
const OTRA_CONSTANTE = CONSTANTE.'; Adiós Mundo';
echo OTRA_CONSTANTE;
const ANIMALES = array('perro', 'gato', 'pájaro');
echo ANIMALES[1]; // muestra "gato"
// Funciona a partir de PHP 7
define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; // muestra "gato"
?>