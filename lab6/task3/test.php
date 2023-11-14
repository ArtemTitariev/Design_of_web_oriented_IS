<?php

require_once './Client.php';


$client1 = new Client('Name1', 'Some address1');
sleep(5);
$client2 = clone $client1;

echo $client1->getInfo();
echo '<br/>';
echo $client2->getInfo();
