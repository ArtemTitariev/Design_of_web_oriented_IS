<?php

abstract class ClientFactory
{
	public abstract function createClient($name, $address, $accountNumber): Client;
}
