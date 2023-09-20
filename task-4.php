<?php
function Fibonacci($number)
{

	$num1 = 0;
	$num2 = 1;
	$num3 = 1;
	echo " First 15 Fibonacci Numbers: ";

	for ($i = 0; $i < 15; $i++) {
		echo  $num1 . ' ';
		$num2 = $num3;
		$num3 = $num2 + $num1;
		$num1 = $num2;
	}
}


$number = 15;
Fibonacci($number);
