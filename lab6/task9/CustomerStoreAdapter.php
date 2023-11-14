<?php

class CustomerStoreAdapter implements ICustomerStore
{
	private $client;
	private $customerProfile;

	public function __construct(Client $client, CustomerProfile $customerProfile)
	{
		$this->client = $client;
		$this->customerProfile = $customerProfile;
	}

	public function saveCustomerData(Client $client)
	{
		// combine data before saving
		$combinedData = $this->combineData();

		// saving customer data, for example, in the store database
		echo "Saving customer data in the store database: 
		{$combinedData} <br/>";
	}

	public function getCustomerData($clientId): Client
	{
		// receiving customer data
		// to simplify, an existing object is simply returned
		return $this->client;
	}

	private function combineData(): string
	{
		$clientData = $this->client->getInfo();
		$purchaseHistory = json_encode(
			$this->customerProfile->getPurchaseHistory()
		);

		return "Client data: {$clientData}, 
			purchase history: {$purchaseHistory}";
	}
}
