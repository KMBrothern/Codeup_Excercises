<?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// Create a function that returns TRUE or FALSE if an array value is found
 function arraySearch($needle, $array) {
 	$found = false;
 	foreach ($array as $value) {
 		if ($needle == $value) {
 			$found = true;
 		}

 	}
 	return $found;
}
 $tina = arraySearch('Tina', $names);
 echo $tina . PHP_EOL;
 // There's no bob this returned false
 $bob = arraySearch('Bob', $names);
 echo $bob . PHP_EOL;
 $mike = arraySearch('Mike', $names);
 echo $mike . PHP_EOL;
 $amy = arraySearch('Amy', $names);
 echo $amy . PHP_EOL;
 $adam = arraySearch('Adam', $names);
 echo $adam . PHP_EOL;

// Create a function to compare 2 arrays that returns the number of values in common between the arrays
function compareArrays($names, $compareArray) {
	$count = 0;
	foreach ($names as $value) {
		$result = array_search($value, $compareArray);
			if(is_numeric($result)) {
				$count++;
			}

		}
	// return $result;
	
}


compareArrays($names, $compare);

