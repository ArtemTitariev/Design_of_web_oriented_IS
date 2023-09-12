<?php
class Coor
{
	private $name;
	private $login;
	private $password;

	public function __construct(string $name, string $login, string $password) // function for setting attributes  
	{
		$this->name = $name; //set name;
		$this->login = $login; // set login
		$this->password = $password; //set pass
	}

	public function get_name()  //function for getting name
	{
		echo "<p>Name: " . $this->name . "</p>";
	}

	public function get_login()  //function for getting name
	{
		echo "<p>Login: " . $this->login . "</p>";
	}

	public function get_password()  //function for getting name
	{
		echo "<p>Password: " . $this->password . "</p>";
	}

	public function __destruct() //destructor
	{
		echo "<p>Destroyed " . $this->name . "</p>";
	}
}

$nick = new Coor("Nick", "Nick", "123456"); //creating “Coor” object
$nick->get_name(); //print attributes
$nick->get_login();
$nick->get_password();
echo '<br>';

$jack = new Coor("Jack", "J32n", "111111"); //creating “Coor” object
$jack->get_name(); //print attributes
$jack->get_login();
$jack->get_password();
echo '<br>';

$anna = new Coor("Anna", "Usr2ewd6", "654321"); //creating “Coor” object
$anna->get_name(); //print attributes
$anna->get_login();
$anna->get_password();
echo '<br>';
