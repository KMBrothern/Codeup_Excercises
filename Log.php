<?php
class Log
{
    public $filename = '';

    public function logMessage($logLevel, $message) 
    {
        $date = date('Y-m-d');
        $time = date('H:i:s');
        $logString = $date." ".$time;
        $handle = fopen($this->filename, 'a');
        fwrite($handle, PHP_EOL. $logString." "."[$logLevel]"." ".$message);
        echo "file has been written \n";
        fclose($handle);
    }


    public function logInfo($message)
    {
        $this->logMessage("INFO", $message);
    }

    public function logError($message)
    {
        $this->logMessage("ERROR", $message);
    }

}
