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
	if (is_real($thing)) {
	echo "$thing is a (real) float \n";	
	}
}