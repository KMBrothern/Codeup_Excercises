<?php
// Output should be ordered by units in descending order
// Columns should appear in the following format
// Office | Date | Report Name
// Total Sales | Number of Employees | Avg Sale per Employee
// Units | Full Name   | Employee Number --these are columns headers
// 5       Bob Boberson  2 --pipes should line up
	
	$filename = 'report.txt';
	$handle = fopen($filename, 'r');
	$contentsOfReportAsString = fread($handle, filesize($filename));
	// var_dump($contentsOfReportAsString);
	fclose($handle);

	$contentsOfReportAsArray = explode("\n", trim($contentsOfReportAsString));

	$reportName = array_shift($contentsOfReportAsArray);
	$reportDate = array_shift($contentsOfReportAsArray);
	$reportOffice = array_shift($contentsOfReportAsArray);

	foreach ($contentsOfReportAsArray as $key => $content) {
		$trimCharacters = trim($content, "* =");

		if (empty($trimCharacters)) {
			unset($contentsOfReportAsArray[$key]);
		}
	}

	// print_r($contentsOfReportAsArray);



	foreach ($contentsOfReportAsArray as $key) {
		$eachEmployeeAsArray[] = explode(', ', $key);
	}

// print_r($eachEmployeeAsArray);

// here I could perhaps use array columns to make the separate arrays for me and change their keys to names at the same time
// array_columns here
$unitsSold = array_column($eachEmployeeAsArray, 3, 'Units Sold');
$firstName = array_column($eachEmployeeAsArray, 1, 'First Name');
$lastName =  array_column($eachEmployeeAsArray, 2, 'Last Name');
$employeeNumber = array_column($eachEmployeeAsArray, 0, 'Employee Number');
// shift the key names off the beginning of these new array
// they contain the values that I want to use for headers
	$unitsHeader = array_shift($unitsSold);
	$firstNameHeader = array_shift($firstName);
	$lastNameHeader = array_shift($lastName);
	$employeeNumberHeader = array_shift($employeeNumber);

echo "\n";
// first tier header
echo str_pad($reportName, 50);
echo str_pad($reportOffice, 40);
echo str_pad($reportDate, 20). PHP_EOL;
echo "\n";
// second tier header
echo str_pad($unitsHeader, 30);
echo str_pad($firstNameHeader, 30);
echo str_pad($lastNameHeader, 30);
echo str_pad($employeeNumberHeader, 10).PHP_EOL;
echo "\n";




// print_r($unitsSold);
// print_r($employeeNumber);
// print_r($firstName);
// print_r($lastName);

// for loop to iterate through arrays and output each employees stats
for ($i=0; $i < count($unitsSold); $i++) { 
	$formattedStrings[] = str_pad($unitsSold[$i], 30). str_pad($firstName[$i], 30). str_pad($lastName[$i], 30). str_pad($employeeNumber[$i], 10). PHP_EOL;
}
// sort your formatted strings array
natsort($formattedStrings);

$orderedArray = array_reverse($formattedStrings);
// once its in the order that we want, then
// we will for each on the $formattedStrings array for each string in that array
foreach ($orderedArray as $string) {
	echo $string;
}
