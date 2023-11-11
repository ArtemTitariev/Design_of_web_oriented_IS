<?php

interface AbstractClientFactory
{
	public function createClient(string $name, string $address, string $accountNumber): Client;
}
