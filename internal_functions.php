<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function checkVariable($variable, $variable_name) {
	if(isset($variable)){
		return "Function call of $variable_name shows it is SET\n";
	}
	if(empty($variable)){
		return "Function call of $variable_name shows it is EMPTY\n";
	}
}

// TEST: If var $nothing is set, display '$nothing is SET'
if(isset($nothing)){
	echo "Second check of \$nothing shows it is SET\n";
}
// TEST: If var $nothing is empty, display '$nothing is EMPTY'

else{
	echo "Second check of \$nothing shows it is EMPTY\n";
}

$checkOne = checkVariable($nothing, '$nothing');
echo $checkOne;
$checkTwo = checkVariable($something, '$something');
echo $checkTwo;
$checkThree = checkVariable($array, '$array');
echo $checkThree;


// TEST: If var $something is set, display '$something is SET'
if(isset($something)){
	echo "Second check of \$something shows it is SET\n";
}

// Serialize the array $array, and output the results
echo serialize($array);
// serialize($array);
// print_r($array);

// Unserialize the array $array, and output the results
print_r(unserialize(serialize($array)));
// unserialize('$array');
// print_r($array);