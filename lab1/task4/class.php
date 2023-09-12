<?php
class Coor
{
	private $text;

	public function __construct($text) // function for setting name  
	{
		$this->text = $text; //set some “text” to this “text”;
	}

	public function get_name()  //function for getting name
	{
		echo "<p>Name: " . $this->text . "<br>"; // printing name  
	}

	
}

$object = new Coor("Nick"); //creating “Coor” object

$object->get_name(); //function call

unset($object); //object destruction
echo "Object is deleted!";
