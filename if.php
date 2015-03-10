<?php

$a = 7;
 $b = 12;
 $c = '12';

if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 }else{

     echo "$b is greater than $a\n";
 
 }
// end of if else stamement 1
 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }else{
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 
 }
 // end of if else statement 2

 

 if ($b === $c) {
     echo "$b is identical $c\n";

 }else if ($b !== $c) {
     echo "$b is not identical to $c\n";

}elseif ($b == $c) {
     echo "$b is equal to $c\n";
}else{
      echo "$b is not equal to $c\n";

}

 

 






