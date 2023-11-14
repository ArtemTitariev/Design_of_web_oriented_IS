<?php

interface ICustomerStore
{
	public function saveCustomerData(Client $client);
	public function getCustomerData($clientId): Client;
}
