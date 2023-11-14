<?php

class Client
{
	private $name;
	private $address;
	private $accountNumber;
	private $accessionDate;


	public function __construct($name, $address, $accountNumber)
	{
		$this->name = $name;
		$this->address = $address;
		$this->accountNumber = $accountNumber;
		$this->accessionDate = new DateTime();
	}


	public function __clone()
	{
		$this->accessionDate = new DateTime();

		// all other attributes do not need to be copied 
		// manually as they are simple
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


	public function setAccountNumber($accountNumber)
	{
		if (!isset($accountNumber)) {
			exit('Account number is empty');
		}
		$this->address = $accountNumber;
	}

	public function getAccountNumber(): int
	{
		return $this->accountNumber;
	}

	public function showAccountNumber()
	{
		echo 'Account number: ' . $this->accountNumber;
	}

	//The method searches for the field specified in the $field variable 
	//and checks the value of $value for equality 
	public function search($field, $value): bool
	{
		switch ($field) {
			case 'name':
				return $this->name === $value;
			case 'address':
				return $this->address === $value;
			case 'accountNumber':
				return $this->accountNumber === $value;
			default:
				return false; //search field not found
		}
	}
};
