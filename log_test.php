<?php
require_once 'Log.php';

$logOne = new Log();
$logOne->filename = date('Y-m-d').".log";
$logOne->logInfo('some kind of info message');
$logOne->logError('some kind of error message');


?>