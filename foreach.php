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

foreach ($things as $thing) {
	if (is_string($thing)) {
	echo "$thing is a string \n";	
	}
}
// not finished somewhere
// go back and do all forms (1 of each if there are multiples) in an if, else if, else loop