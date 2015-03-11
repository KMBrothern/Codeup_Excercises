<?php

fwrite(STDOUT, 'Please give me a starting number ');
$startingNumber = trim(fgets(STDIN));
fwrite(STDOUT, 'Please give me an ending number ');
$endingNumber = trim(fgets(STDIN));
for ($i = $startingNumber; $i <= $endingNumber; $i++){
	echo "$i\n";
}