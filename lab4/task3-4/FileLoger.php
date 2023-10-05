<?php

require_once 'ILoger.php';
require_once 'CreateLog.php';

class FileLoger implements ILoger
{
	use CreateLog;

	/** @var resource - a file pointer resource */
	private $file;

	/** @var string */
	private $logFile;

	public function __construct(string $filename, string $mode = 'a')
	{
		$this->logFile = $filename;
		$this->file = fopen($filename, $mode)
			or die('Could not open the log file'); //open file or print an error
	}

	public function __destruct()
	{
		if ($this->file) {
			fclose($this->file);
		}
	}
}
