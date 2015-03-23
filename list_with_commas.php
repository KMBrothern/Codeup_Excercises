<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array){

	$lastItem = array_pop($array);

	$changedArray = implode(', ', $array);
	return "$changedArray and $lastItem";
}
 
$famousFakePhysicists = humanizedList($physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}" . PHP_EOL;
