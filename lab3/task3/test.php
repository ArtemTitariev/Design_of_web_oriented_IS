<?php
require_once "Client.php";
require_once "LegalClient.php";

$client1 = new LegalClient(
	'Some Name',
	"Миколи Сумцова 2, Суми, Сумська область",
	54543543,
	'СумДУ'
);

// call an overridden abstract method
$client1->showInfo();
