<?php
//for loop
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " "; 
    }
}

echo "Even numbers for loop:";
printEvenNumbersFor(2, 20, 2);

echo"<br/>";

//while loop
function printEvenNumbersWhile($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " "; 
        $start += $step;   
    }
}

echo "Even numbers while loop:";
printEvenNumbersWhile(2, 20, 2);

echo"<br/>";


//do while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    do {
        echo $start . " "; 
        $start += $step;   
    } while ($start <= $end);
}
echo "Even numbers do while loop:";
printEvenNumbersDoWhile(2, 20, 2);




