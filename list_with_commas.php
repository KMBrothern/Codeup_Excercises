<?php

// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// // create string $famousFakePhysicists that list the physicists and contains "and" 
// // at the end

// // first turn it from string to array using explode
// $physicistsArray = explode(', ', $physicistsString);
// $lastItem = array_pop($physicistsArray);
// print_r($physicistsArray);
// // print_r($lastItem);

// $famousFakePhysicists = implode(', ', $physicistsArray);
// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} and {$lastItem}" . PHP_EOL;

// function solution
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array){
	// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	// $physicistsArray = explode(', ', $physicistsString);

	$lastItem = array_pop($array);
// print_r($physicistsArray);

	$changedArray = implode(', ', $array);
	return "$changedArray and $lastItem";
// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} and {$lastItem}" . PHP_EOL;


}
 
$famousFakePhysicists = humanizedList($physicistsArray);
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}" . PHP_EOL;


