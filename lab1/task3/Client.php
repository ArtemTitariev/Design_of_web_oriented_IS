<?php

class Client
{
	public $name;
	public $address;
	public $account_number;

	private $test;
	//set name 
	public function set_test($value)
	{
		echo 'setter call<br>';
		$this->test = $value;
	}

	//returns test value
	public function get_test()
	{
		echo 'getter call<br>';
		return $this->test;
	}

	//set name 
	public function set_name($name)
	{
		if (!isset($name)) {
			exit('Name is empty');
		}
		$this->name = $name;
	}

	//returns name
	public function get_name(): string
	{
		return $this->name;
	}

	//print name
	public function show_name()
	{
		echo 'Name: ' . $this->name;
	}


	public function set_address($address)
	{
		if (!isset($address)) {
			exit('Address is empty');
		}
		$this->address = $address;
	}

	public function get_address(): string
	{
		return $this->address;
	}

	public function show_address()
	{
		echo 'Address: ' . $this->address;
	}


	public function set_account_number($account_number)
	{
		if (!isset($account_number)) {
			exit('Account number is empty');
		}
		$this->address = $account_number;
	}

	public function get_account_number(): int
	{
		return $this->account_number;
	}

	public function show_account_number()
	{
		echo 'Account number: ' . $this->account_number;
	}

	//The method searches for the field specified in the $field variable 
	//and checks the value of $value for equality 
	public function search($field, $value): bool
	{
		switch ($field) {
			case 'name':
				return $this->name === $value;
			case 'address':
				return $this->address === $value;
			case 'account_number':
				return $this->account_number === $value;
			default:
				return false; //search field not found
		}
	}

	private function private_method()
	{
		echo 'Call private method in class' . '<br>';
	}

	public function public_method()
	{
		echo 'Call public method' . '<br>';
		echo 'This method will call the private method' . '<br>';
		$this->private_method();
		echo 'The public method is coming to an end'
			. '<br>';
	}

	//The method expects an array of Client objects and prints each object
	public static function show_objects(array $objects)
	{
		foreach ($objects as $obj) {
			echo 'Client 3<br>';
			$obj->show_name();
			echo '<br>';
			$obj->show_address();
			echo '<br>';
			$obj->show_account_number();
			echo '<br>';
		}
	}
};

/*$client1 = new Client;
$client1->set_name('Name1');
$client1->address = 'some address';
$client1->account_number = 33002;

$client2 = new Client;
$client2->name = 'Name2';
$client2->set_address('some address2');
$client2->account_number = 773002;

$client3 = new Client;
$client3->name = 'Name3';
$client3->address = 'some address3';
$client3->account_number = 3388024;*/

/*echo 'Client 1<br>';
echo 'Name: ' . $client1->get_name() . '<br>';
echo 'Address: ' . $client1->address . '<br>';
$client1->show_account_number() . '<br>';

echo 'Client 2<br>';
echo 'Name: ' . $client2->name . '<br>';
echo 'Address: ' . $client2->address . '<br>';
echo 'Account number: ' . $client2->account_number . '<br>';

echo 'Client 3<br>';
$client3->show_name();
echo '<br>';
$client3->show_address();
echo '<br>';
$client3->show_account_number();
echo '<br>';*/

/*
//encapsulation demonstrating
echo 'encapsulation demonstrating<br>';

$client1->set_test('test_value');
echo $client1->get_test() . '<br>';

$client4 = new Client;
$client4->name = 'Name4';
$client4->address = 'some address4';
$client4->account_number = 4444;
$client5 = new Client;
$client5->name = 'Name5';
$client5->address = 'some address5';
$client5->account_number = 55555;

//reate array
$array = array($client1, $client2, $client3, $client4, $client5);
//print array
echo '<hr>show_objects method call<br>';
Client::show_objects($array);
*/