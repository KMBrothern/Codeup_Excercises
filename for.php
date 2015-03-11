<?php

fwrite(STDOUT, 'Please give me a starting number ');
$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Please give me an ending number ');
$endingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Please choose your increment - $i += number you\'d like to increase by ');
$incrementValue = trim(fgets(STDIN));
for ($i = $startingNumber; $i <= $endingNumber; $i+= $incrementValue){
	echo "$i\n";
}