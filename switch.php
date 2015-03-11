<?php

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');
 echo "$dayOfWeek\n";

 // switch($dayOfWeek) {
 //     case 1:
 //         // Output Monday
 //     	echo "Today is Monday\n";
 //     	break;
 //     case 2:
 //         // Output Tuesday
 //     	echo "Today is Tuesday\n";
 //     	break;
 //     case 3:
 //         // Output Wednesday
 //     	echo "Today is Wednesday\n";
 //     	break;
 //     case 4:
 //         // Output Thursday
 //     	echo "Today is Thursday\n";
 //     	break;
 //     case 5:
 //         // Output Friday
 //     	echo "Today is Friday\n";
 //     	break;
 //     case 6:
 //         // Output Saturday
 //     	echo "Today is Saturday\n";
 //     	break;
 //     case 7:
 //         // Output Sunday
 //     	echo "Today is Sunday\n";
 //     	break;
 // }

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
