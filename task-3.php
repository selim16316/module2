<?php
$num1 = 0;
$num2 = 1;
$num3 = 1;

echo " First 10 Fibonacci Numbers: ";

for ($i = 0; $i < 10; $i++) {
    echo $num1 . ' ';
    $num2 = $num3;
    $num3 = $num2 + $num1;
    $num1 = $num2;

    if ($num1 > 100) {
        break;
    }
}
