<?php


class LegalClient implements Client
{
	use ClientInfo;

	public function getInfo(): string
	{
		return "Legal client: {$this->name}, Address: {$this->address}, Account number: {$this->accountNumber}";
	}
}
