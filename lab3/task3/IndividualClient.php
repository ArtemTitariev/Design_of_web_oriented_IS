<?php

require_once 'Client.php';

class IndividualClient extends Client
{
	/** @var string */
	private $mobilePhone;

	public function __construct(string $name, string $address, int $accountNumber, string $mobilePhone)
	{
		parent::__construct($name, $address, $accountNumber);
		$this->setMobilePhone($mobilePhone);
	}

	// redefinition of abstract method
	public function showInfo(): void
	{
		$this->show();
		$this->showMobilePhone();
		echo '<br>';
	}

	public function setMobilePhone($companyName): void
	{
		if (!isset($companyName)) {
			exit('Mobile phone is empty');
		}
		$this->mobilePhone = $companyName;
	}

	public function getMobilePhone(): string
	{
		return $this->mobilePhone;
	}

	public function showMobilePhone(): void
	{
		echo 'mobile phone: ' . $this->mobilePhone;
	}
}
