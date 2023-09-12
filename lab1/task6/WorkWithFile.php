<?php
header("Content-Type: text/html; charset=windows-1251");

class WorkWithFile
{
	private $read_filename;
	private $write_filename;

	public function __construct($read_filename, $write_filename)
	{
		$uploaddir = './';
		$this->read_filename = $uploaddir . $read_filename;
		$this->write_filename = $uploaddir . $write_filename;
	}

	//The method reads words from one file and writes the number of letters for each word to another file
	public function writeCount()
	{
		//open file for reading
		if (empty($this->read_filename))
			exit("File doesn't exist");
		//read words from file
		$data = file($this->read_filename);
		//open file for writing
		$fw = fopen($this->write_filename, "w") or die("File could not be created");

		foreach ($data as $word) {
			//write each word in file without spaces (one per column)
			fwrite($fw, strlen(trim($word)) . PHP_EOL);
		}
		fclose($fw);
	}
}

$first = new WorkWithFile("input.txt", "output.txt");
$first->writeCount();
