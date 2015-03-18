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
		// here I could perhaps use array columns to make the separate arrays for me and change their keys to names at the same time
	// 	$eachEmployee [$key] ['Employee Number'] = $eachEmployeeAsArray[0];
	// 	$eachEmployee [$key] ['Full Name'] = $eachEmployeeAsArray [1]." ". $eachEmployeeAsArray[2];
	// 	$eachEmployee [$key] ['Units Sold'] = $eachEmployeeAsArray[3];
	}

	// print_r($eachEmployee);
print_r($eachEmployeeAsArray);
// array_columns here


echo str_pad($reportName, 30);
echo str_pad($reportOffice, 30);
echo str_pad($reportDate, 10). PHP_EOL;
// print_r($eachEmployee);
