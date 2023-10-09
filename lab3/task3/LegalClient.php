<?php

require_once 'Client.php';

class LegalClient extends Client
{
	/** @var string */
	private $companyName;

	public function __construct(string $name, string $address, int $accountNumber, string $companyName)
	{
		parent::__construct($name, $address, $accountNumber);
		$this->setCompanyName($companyName);
	}

	// redefinition of abstract method
	public function showInfo(): void
	{
		$this->show();
		$this->showCompanyName();
		echo '<br>';
	}


	public function setCompanyName($companyName): void
	{
		if (!isset($companyName)) {
			exit('Company name is empty');
		}
		$this->companyName = $companyName;
	}

	public function getCompanyName(): string
	{
		return $this->companyName;
	}

	public function showCompanyName(): void
	{
		echo  'Company name: ' . $this->companyName;
	}
};
