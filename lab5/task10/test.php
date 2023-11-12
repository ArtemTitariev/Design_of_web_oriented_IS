<?php

require_once './Client/Client.php';
require_once './Client/ClientInfo.php';
require_once './Client//IndividualClient.php';
require_once './Client/LegalClient.php';

require_once './Factory/ClientFactory.php';
require_once './Factory/IndividualClientFactory.php';
require_once './Factory/LegalClientFactory.php';

// Використання патерну Factory Method
$factory1 = new IndividualClientFactory();
$individualClient = $factory1->createClient('Name1', 'Address1', 'N1100ic');

$factory2 = new LegalClientFactory();
$legalClient = $factory2->createClient('Name2', 'Address2', 'N2200lc');

// Виведення інформації про клієнтів
echo "Individual Client: " . $individualClient->getInfo() . "<br/>";
echo "Legal Client: " . $legalClient->getInfo();
