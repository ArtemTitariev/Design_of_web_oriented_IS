<?php

interface IContactInfo
{
	public function setEmail(string $email): void;

	public function getEmail(): string;

	public function setPhone(string $phone): void;

	public function getPhone(): string;
}
