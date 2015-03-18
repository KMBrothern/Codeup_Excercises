<?php

function logMessage($logLevel, $message)
{
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $logString = $date." ".$time;
    // $logString = "This is a log file";
    // todo - complete this function
    $filename = "log-".$date.".txt";
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
    echo "file has been written \n";
    fclose($handle);
}

loginfo();
logError();
// logMessage("INFO", "This is an info message.");
// logMessage("ERROR", "This is an error message.");

function logInfo(){
logMessage("INFO", "This is an info message.");
}

function logError(){
logMessage("ERROR", "This is an error message.");

}