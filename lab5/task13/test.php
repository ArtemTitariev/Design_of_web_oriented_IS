<?php

require_once './Client/Client.php';
require_once './Client/ClientInfo.php';
require_once './Client//IndividualClient.php';
require_once './Client/LegalClient.php';

require_once './AbstractFactory/AbstractClientFactory.php';
require_once './AbstractFactory/IndividualClientFactory.php';
require_once './AbstractFactory/LegalClientFactory.php';

$factory = new IndividualClientFactory();
$client1 = $factory->createClient('Name1', 'Address1', 'N1100ic');

$factory = new LegalClientFactory();
$client2 = $factory->createClient('Name2', 'Address2', 'N2200lc');

echo $client1->getInfo() . "<br/>";
echo $client2->getInfo() . "<br/>";
