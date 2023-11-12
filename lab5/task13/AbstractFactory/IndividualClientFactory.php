<?php

class IndividualClientFactory implements AbstractClientFactory
{
	public function createClient(string $name, string $address, string $accountNumber): Client
	{
		return new IndividualClient($name, $address, $accountNumber);
	}
}
