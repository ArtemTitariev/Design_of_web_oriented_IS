<?php

require_once 'DbLoger.php';
require_once 'connectionParams.php';

$loger = new DbLoger($connectionParams);

// create log
$loger->log('log message');

// wait 3 seconds
sleep(3);

// create log
$loger->log('another log message');

echo 'done';