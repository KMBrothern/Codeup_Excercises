<?php
// Setting variables = to something other than what you use when you call them
// does not make it global as in JS and therefore overriding what variable
// you use when you call the function
// $a =2;
// $b =5;

function add($a, $b) {
	  if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
        // echo add($a, $b) . " This is the result of the add function". PHP_EOL;
    } else {
        // echo "ERROR: Both arguments must be numbers\n";
        // errorMessage($a, $b);
        return false;

    }

}
// add errorMessage($a, $b);
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
        // echo $a - $b . " This is the result of the subtract function". PHP_EOL;
    } else {
        // errorMessage($a, $b);
        return false;

    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
        // echo $a * $b . " This is the result of the multiply function".PHP_EOL;
    } else {
        // errorMessage($a, $b);
        return false;

    }
}

// validate divide by 0 errors, display error if attempts are made
// make the error messages show the value of the arguments
function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) !== 0) {
        return $a / $b;
        // echo $a / $b . " This is the result of the divide function".PHP_EOL;
    } else {
        // echo "ERROR: Both arguments must be numbers\n";
        // echo "ERROR: You cannot divide {$a} by {$b}\n";
        // divisionError($a, $b);
        return false;


    }
}

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b) !== 0) {
        return $a % $b;
        // echo $a % $b . " This is the result of the modulus function".PHP_EOL;
    } else {
        // echo "ERROR: Both arguments must be numbers\n";
        // echo "ERROR: You cannot divide {$a} by {$b} to get modulus\n";
        // divisionError($a, $b);
        return false;
    }
}

function errorMessage($a,$b){
        echo "ERROR: Both arguments must be numbers and {$a} or {$b} is not a number\n";
}

function divisionError($a, $b){
    echo "ERROR: You cannot divide {$a} or {$b} by 0\n";
}
// function calls
$addition = add(5, 10);
echo "$addition\n";
$subtraction = subtract(25, 17);
echo "$subtraction\n";
$times = multiply(5, 12);
echo "$times\n";
$message = divide(15, 30);
echo "$message\n";
$modulo = modulus(2, 12);
echo "$modulo\n";
// my echo's so that I can see the returns

// echo subtract($a, $b);
// echo multiply($a, $b);
// echo divide($a, $b);
// echo modulus($a, $b);