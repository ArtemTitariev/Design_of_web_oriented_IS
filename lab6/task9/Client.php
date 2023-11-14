<?php

class Client
{
	private $name;
	private $address;
	private $accountNumber;
	private $accessionDate;


	public function __construct($name, $address)
	{
		$this->name = $name;
		$this->address = $address;
		// generate random string
		$this->accountNumber = $this->generateAccountNumber(5);
		$this->accessionDate = new DateTime();
	}


	public function __clone()
	{
		$this->accessionDate = new DateTime();

		// account number must be unique
		$this->accountNumber = $this->generateAccountNumber(5);

		// all other attributes do not need to be copied 
		// manually as they are simple
	}

	private function generateAccountNumber($len = 5)
	{
		return bin2hex(random_bytes($len));
	}

	public function getInfo(): string
	{
		return "Client: {$this->name}, Address: {$this->address}, Account number: {$this->accountNumber}, Accession date : {$this->accessionDate->format('Y-m-d H:i:s')}";
	}

	// returns accession date
	public function getAccessionDate()
	{
		return $this->accessionDate;
	}

	//set name 
	public function setName($name)
	{
		if (!isset($name)) {
			exit('Name is empty');
		}
		$this->name = $name;
	}

	//returns name
	public function getName(): string
	{
		return $this->name;
	}

	//print name
	public function showName()
	{
		echo 'Name: ' . $this->name;
	}


	public function setAddress($address)
	{
		if (!isset($address)) {
			exit('Address is empty');
		}
		$this->address = $address;
	}

	public function getAddress(): string
	{
		return $this->address;
	}

	public function showAddress()
	{
		echo 'Address: ' . $this->address;
	}

	public function getAccountNumber()
	{
		return $this->accountNumber;
	}

	public function showAccountNumber()
	{
		echo 'Account number: ' . $this->accountNumber;
	}
};
