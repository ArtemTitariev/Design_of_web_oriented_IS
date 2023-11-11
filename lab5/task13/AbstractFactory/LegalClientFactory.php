<?php

class LegalClientFactory implements AbstractClientFactory
{
	public function createClient(string $name, string $address, string $accountNumber): Client
	{
		return new LegalClient($name, $address, $accountNumber);
	}
}
