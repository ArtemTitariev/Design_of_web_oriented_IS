<?php
trait LegalPerson
{
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
}
