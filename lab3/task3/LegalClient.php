<?php

class LegalClient extends Client
{
	/** @var string */
	private $companyName;

	public function __construct($name, $address, $accountNumber, $companyName)
	{
		parent::__construct($name, $address, $accountNumber);
		$this->setCompanyName($companyName);
	}

	// redefinition of abstract method
	public function showInfo()
	{
		$this->show();
		$this->showCompanyName();
		echo '<br>';
	}


	public function setCompanyName($companyName)
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
		echo $this->companyName;
	}
};
