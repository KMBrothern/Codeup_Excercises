<?php

for ($i=99; $i > 0 ; $i -= 1) { 
	echo "$i bottles of patron on the wall, $i bottles of patron.\n Take one down pass it around, " . --$i . " bottles of patron on the wall.\n";
	if($i == 1){
		echo "$i bottles of patron on the wall, $i bottle of patron.\n Take one down pass it around, " . --$i . " bottle of patron on the wall.\n";

		// echo "99 bottles of Patron drank? Congrats you just earned Death...RIP\n";
	}
	if($i < 1) {
		echo "You drank 99 bottles of Patron?! Congrats you just earned Death...RIP x_x\n";

	}
}