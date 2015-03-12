<?php
// Setting variables = to something other than what you use when you call them
// does not make it global as in JS and therefore overriding what variable
// you use when you call the function
// $a =2;
// $b =5;

function add($a, $b) {

    echo $a + $b;
}

function subtract($a, $b) {
    // Add code here
    echo $a - $b;
}

function multiply($a, $b) {
    // Add code here
    echo $a * $b;
}


function divide($a, $b) {
    // Add code here
    echo $a / $b;
}

function modulus($a, $b){
	echo $a % $b;
}


add(7, 10);

subtract(25, 17);
multiply(5, 12);
divide(12, 3);
modulus(2, 12);