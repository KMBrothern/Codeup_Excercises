<?php
// Setting variables = to something other than what you use when you call them
// does not make it global as in JS and therefore overriding what variable
// you use when you call the function
// $a =2;
// $b =5;

function add($a, $b) {
	  if (is_numeric($a) && is_numeric($b)) {
        echo $a + $b . " This is the result of the add function". PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }

}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a - $b . " This is the result of the subtract function". PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b . " This is the result of the multiply function".PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}


function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        echo $a / $b . " This is the result of the divide function".PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
        echo $a % $b . " This is the result of the modulus function".PHP_EOL;
    } else {
        echo "ERROR: Both arguments must be numbers\n";
    }
}


add(7, 10);
subtract(25, 17);
multiply(5, 12);
divide(12, 3);
modulus(2, 12);