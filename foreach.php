<?php

$things = array(
	'Sgt. Pepper', 
	"11", 
	null, 
	array(1,2,3),
	3.14, 
	"12 + 7",
	false, 
	(string) 11
	);

foreach ($things as $key => $thing) {
	if (is_bool($thing)) {
	echo "The index at $key is a boolean \n";	
	}
}