<?php

require_once 'CurrDateTime.php';

trait CreateLog
{
	use CurrDateTime;

	public function log(string $message): void
	{ //redefinition “log” function
		$message = $this->getCurrentDateTime() .
			': ' . $message . "\n";

		fwrite($this->file, $message);
	}
}
