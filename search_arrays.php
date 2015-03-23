<?php
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
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
 $bob = arraySearch('Bob', $names);
 echo $bob . PHP_EOL;
 $mike = arraySearch('Mike', $names);
 echo $mike . PHP_EOL;
 $amy = arraySearch('Amy', $names);
 echo $amy . PHP_EOL;
 $adam = arraySearch('Adam', $names);
 echo $adam . PHP_EOL;

function compareArrays($names, $compareArray) {
	$count = 0;
	foreach ($names as $value) {
		$result = array_search($value, $compareArray);
		if(is_numeric($result)) {
				$count++;
		}

	}
	
}


compareArrays($names, $compare);

