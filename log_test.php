<?php
require_once 'Log.php';

// $logOne = new Log();
// $logOne->filename = date('Y-m-d').".log";
// $logOne->logInfo('some kind of info message');
// $logOne->logError('some kind of error message');


$log2 = new Log('cli');
$log2->logInfo('I made it into the logs yo!');
$log2->logError('I made it too, because I\'m a no good error');

$log3 =new Log('abc');
$log3->logInfo('I\'m a totally new log with an info message');
?>