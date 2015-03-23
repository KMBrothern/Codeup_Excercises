<?php


function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
       
        return false;

    }

}
function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return false;

    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return false;

    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) !== 0) {
        return $a / $b;
    } else {
        
        return false;


    }
}

function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b) !== 0) {
        return $a % $b;
    } else {
        
        return false;
    }
}

function errorMessage($a,$b){
        echo "ERROR: Both arguments must be numbers and {$a} or {$b} is not a number\n";
}

function divisionError($a, $b){
    echo "ERROR: You cannot divide {$a} or {$b} by 0\n";
}
// my function calls
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

