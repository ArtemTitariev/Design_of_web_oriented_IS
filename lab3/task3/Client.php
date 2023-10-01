<?php

abstract class Client
{
	/** @var string */
	private $name;
	/** @var string */
	private $address;
	/** @var int */
	private $accountNumber;

	abstract public function showInfo();

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

	protected function show()
	{
		$this->showName();
		echo '<br>';
		$this->showAddress();
		echo '<br>';
		$this->showAccountNumber();
		echo '<br>';
	}
};
