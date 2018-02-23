<?php
$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)' . ' %3$s (%4$2d = %4$04b)' . "<br>";
$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;
echo "<br> AND bit a bit <br>";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}
echo "<br> OR inclusivo bit a bit <br>";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}
echo "<br> OR exclusivo (XOR) bit a bit <br>";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>