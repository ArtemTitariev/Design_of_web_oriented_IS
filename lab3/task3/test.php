<?php
require_once "IndividualClient.php";
require_once "LegalClient.php";

$client1 = new LegalClient(
	'LegalClient name',
	"Миколи Сумцова 2, Суми, Сумська область",
	54543543,
	'СумДУ'
);

$client2 = new IndividualClient(
	'IndividualClient name',
	"Засумська, 130 2, Суми, Сумська область",
	283952341,
	'+38095-11-33-789'
);

// call an overridden abstract method
$client1->showInfo();
echo '<br>';
$client2->showInfo();
