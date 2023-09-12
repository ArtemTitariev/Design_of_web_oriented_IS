<?php
//import Client class
require_once '../task3/Client.php';

class CSV
{
	private $_csv_file = null;

	/** 
	 * @param string $csv_file  - path to csv file
	 */     public function __construct($csv_file)
	{
		if (file_exists($csv_file)) {
			$this->_csv_file = $csv_file;
		} else throw new Exception("File not found");
	}


	public function setCSV(array $csv)
	{

		$handle = fopen($this->_csv_file, "a"); // Open the file for writing

		foreach ($csv as $obj) {
			fputcsv(
				$handle, //file
				array( //data array
					$obj->get_name(),
					$obj->get_address(),
					$obj->get_account_number()
				),
				";" //separator
			);
		}
		fclose($handle); //close file
	}

	public function getCSV()
	{
		$handle = fopen($this->_csv_file, "r"); // Open the file for reading 

		$array_line_full = array();
		while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
			$array_line_full[] = $line;
		}

		fclose($handle);
		return $array_line_full;
	}
}

echo 'Creating objects:<br>';
$client1 = new Client;
$client1->set_name('Name1');
$client1->address = 'some address';
$client1->account_number = 33002;

$client2 = new Client;
$client2->name = 'Name2';
$client2->set_address('some address2');
$client2->account_number = 773002;

$client3 = new Client;
$client3->name = 'Name3';
$client3->address = 'some address3';
$client3->account_number = 3388024;

$objects = array($client1, $client2, $client3);
Client::show_objects($objects);

echo '<hr>Trying to write objects in csv:<br>';


try {
	$csv = new CSV("client.csv");
	$csv->setCSV($objects);
	echo 'done<hr>';

	echo 'Trying to read data from csv:<br>';
	$get_csv = $csv->getCSV();
	foreach ($get_csv as $value) {
		echo "Name: " . $value[0] . "<br/>";
		echo "Address: " . $value[1] . "<br/>";
		echo " Account number: " . $value[2] . "<br/>";
		echo "--------<br/>";
	}
	echo 'done<hr>';
} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
}
