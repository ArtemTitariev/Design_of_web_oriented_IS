<?php

class CustomerStoreAdapter implements ICustomerStore
{
	private $client;

	// public function __construct(Client $client)
	// {
	// 	$this->client = $client;
	// }

	public function saveCustomerData(Client $client)
	{
		// saving customer data, for example, in the store database
		echo "Saving customer data in the store database: 
		{$this->client->getName()}, {$this->client->getAddress()} <br/>";
	}

	public function getCustomerData($clientId): Client
	{
		// receiving customer data
		// to simplify, an existing object is simply returned
		return $this->client;
	}
}
