<?php

class IndividualClientFactory extends ClientFactory
{
	public function createClient($name, $address, $accountNumber): Client
	{
		return new IndividualClient($name, $address, $accountNumber);
	}
}
