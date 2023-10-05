<?php

class Client
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

	//set name 
	public function setName($name): void
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


	public function setAddress($address): void
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


	public function setAccountNumber($accountNumber): void
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


	public function __toString(): string
	{
		return 'Name: ' . $this->name .
			', address: ' . $this->address .
			', account number: ' . $this->accountNumber;
	}
};
