<?php

 date_default_timezone_set('America/Chicago');

 $dayOfWeek = date('N');
 echo "$dayOfWeek\n";

 if($dayOfWeek == 1){
 	echo "Today is Monday\n";
 }elseif ($dayOfWeek == 2) {
 	echo "Today is Tuesday\n";
 }elseif ($dayOfWeek == 3) {
 	echo "Today is Wednesday\n";
 }elseif ($dayOfWeek == 4) {
 	echo "Today is Thursday\n";
 }elseif ($dayOfWeek == 5) {
 	echo "Today is Friday\n";
 }elseif ($dayOfWeek == 6) {
 	echo "Today is Saturday\n";
 }else{
 	 echo "Today is Sunday\n";

}
