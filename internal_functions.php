<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

function checkVariable($variable, $variable_name) {
	if(isset($variable)){
		return "Function call of $variable_name shows it is SET\n";
	}
	if(empty($variable)){
		return "Function call of $variable_name shows it is EMPTY\n";
	}
}

if(isset($nothing)){
	echo "Second check of \$nothing shows it is SET\n";
}

else{
	echo "Second check of \$nothing shows it is EMPTY\n";
}

$checkOne = checkVariable($nothing, '$nothing');
echo $checkOne;
$checkTwo = checkVariable($something, '$something');
echo $checkTwo;
$checkThree = checkVariable($array, '$array');
echo $checkThree;


if(isset($something)){
	echo "Second check of \$something shows it is SET\n";
}

echo serialize($array);

print_r(unserialize(serialize($array)));
