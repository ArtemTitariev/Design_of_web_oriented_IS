<?php
require_once "LegalClient.php";

$client1 = new LegalClient(
	'Some Name',
	"Миколи Сумцова 2, Суми, Сумська область",
	54543543,
	'test@test.com',
	'+380 97 44 55 222',
	'СумДУ'
);

echo 'Demonstration of the ContactInfo trait methods<br>';
echo 'email: '. $client1->getEmail() . ', phone: ' . $client1->getPhone();
echo '<br><br>Demonstration of the LegalPerson trait method<br>';
echo 'company name: ' . $client1->getCompanyName();
