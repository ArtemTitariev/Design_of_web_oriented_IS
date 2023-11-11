<?php

trait ClientInfo
{
	private $name;
	private $address;
	private $accountNumber;

	public function __construct(string $name, string $address, string $accountNumber)
	{
		$this->name = $name;
		$this->address = $address;
		$this->accountNumber = $accountNumber;
	}

	public function getInfo(): string
	{
		return "Individual client: {$this->name}, Address: {$this->address}, Account number: {$this->accountNumber}";
	}
}
