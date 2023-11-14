<?php

interface ICustomerStore
{
	public function saveCustomerData();
	public function getCustomerData($clientId): Client;
}
