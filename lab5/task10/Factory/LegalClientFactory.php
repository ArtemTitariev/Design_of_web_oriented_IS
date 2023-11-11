<?php

class LegalClientFactory extends ClientFactory
{
	public function createClient($name, $address, $accountNumber): Client
	{
		return new LegalClient($name, $address, $accountNumber);
	}
}
