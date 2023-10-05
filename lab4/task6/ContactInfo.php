<?php

trait ContactInfo
{
	/** @var string */
	protected $email;

	/** @var string */
	protected $phone;

	public function setEmail(string $email): void
	{
		if (!isset($email)) {
			exit('Email is empty');
		}
		$this->email = $email;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setPhone(string $phone): void
	{
		if (!isset($phone)) {
			exit('Phone is empty');
		}
		$this->phone = $phone;
	}

	public function getPhone(): string
	{
		return $this->phone;
	}
}
