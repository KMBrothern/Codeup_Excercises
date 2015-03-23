<?php
	
	$filename = 'report.txt';
	$handle = fopen($filename, 'r');
	$contentsOfReportAsString = fread($handle, filesize($filename));
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


	foreach ($contentsOfReportAsArray as $key) {
		$eachEmployeeAsArray[] = explode(', ', $key);
	}

$unitsSold = array_column($eachEmployeeAsArray, 3, 'Units Sold');
$firstName = array_column($eachEmployeeAsArray, 1, 'First Name');
$lastName =  array_column($eachEmployeeAsArray, 2, 'Last Name');
$employeeNumber = array_column($eachEmployeeAsArray, 0, 'Employee Number');

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

for ($i=0; $i < count($unitsSold); $i++) { 
	$formattedStrings[] = str_pad($unitsSold[$i], 30). str_pad($firstName[$i], 30). str_pad($lastName[$i], 30). str_pad($employeeNumber[$i], 10). PHP_EOL;
}
natsort($formattedStrings);

$orderedArray = array_reverse($formattedStrings);

foreach ($orderedArray as $string) {
	echo $string;
}
