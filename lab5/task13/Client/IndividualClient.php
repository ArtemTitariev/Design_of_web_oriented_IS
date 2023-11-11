<?php

class IndividualClient implements Client
{
	use ClientInfo;

	public function getInfo(): string
	{
		return "Individual client: {$this->name}, Address: {$this->address}, Account number: {$this->accountNumber}";
	}
}
