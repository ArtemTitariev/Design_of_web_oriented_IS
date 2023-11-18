<?php

// contains data about user accounts
class UserAccount
{
	/** @var float */
	private $accountBalance;

	/** @var float */
	private $creditCardBalance;

	public function __construct(float $accountBalance, float $creditCardBalance)
	{
		$this->accountBalance = $accountBalance;
		$this->creditCardBalance = $creditCardBalance;
	}

	public function getAccountBalance(): float
	{
		return $this->accountBalance;
	}

	public function getCreditCardBalance(): float
	{
		return $this->creditCardBalance;
	}
}
