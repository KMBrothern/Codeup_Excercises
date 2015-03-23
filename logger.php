<?php

function logMessage($logLevel, $message)
{
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $logString = $date." ".$time;
    $filename = "log-".$date.".txt";
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
    echo "file has been written \n";
    fclose($handle);
}

loginfo();
logError();

function logInfo(){
logMessage("INFO", "This is an info message.");
}

function logError(){
logMessage("ERROR", "This is an error message.");

}