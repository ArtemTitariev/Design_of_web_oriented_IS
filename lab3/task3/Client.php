<?php

abstract class Client
{
	/** @var string */
	protected $name;
	/** @var string */
	protected $address;
	/** @var int */
	protected $accountNumber;

	public function __construct(string $name, string $address, int $accountNumber)
	{
		$this->setName($name);
		$this->setAddress($address);
		$this->setAccountNumber($accountNumber);
	}

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

	public function showAddress(): void
	{
		echo 'Address: ' . $this->address;
	}


	public function setAccountNumber($accountNumber)
	{
		if (!isset($accountNumber)) {
			exit('Account number is empty');
		}
		$this->accountNumber = $accountNumber;
	}

	public function getAccountNumber(): int
	{
		return $this->accountNumber;
	}

	public function showAccountNumber(): void
	{
		echo 'Account number: ' . $this->accountNumber;
	}


	protected function show(): void
	{
		$this->showName();
		echo '<br>';
		$this->showAddress();
		echo '<br>';
		$this->showAccountNumber();
		echo '<br>';
	}
};
