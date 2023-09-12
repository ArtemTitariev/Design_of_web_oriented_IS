<?php

class Client
{
	public string $name;
	public string $address;
	public $account_number;

	public function set($name)
	{
		if (!isset($name)) {
			throw new Exception('Name is empty');
		}
		$this->name = $name;
	}

	public function get(): string
	{
		return $this->name;
	}

	public function show()
	{
		echo '';
	}

	public function search()
	{
	}
};
