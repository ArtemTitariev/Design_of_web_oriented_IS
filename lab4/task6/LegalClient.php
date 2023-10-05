<?php
require_once 'Client.php';

require_once 'IContactInfo.php';
require_once 'ILegalPerson.php';
require_once 'ContactInfo.php';
require_once 'LegalPerson.php';

class LegalClient extends Client implements IContactInfo, ILegalPerson
{
	use ContactInfo, LegalPerson;

	/** @var string */
	protected $companyName;

	public function __construct(
		string $name,
		string $address,
		int $accountNumber,
		string $email,
		string $phone,
		string $companyName
	) {
		parent::__construct($name, $address, $accountNumber);
		$this->setEmail($email);
		$this->setPhone($phone);
		$this->setCompanyName($companyName);
	}

	public function __toString(): string
	{
		return parent::__toString() .
			', email: ' . $this->email .
			', phone: ' . $this->phone .
			', company name: ' . $this->companyName;
	}
};
