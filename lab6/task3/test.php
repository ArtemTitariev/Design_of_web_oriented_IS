<?php

require_once './Client.php';


$client1 = new Client('Name1', 'Some address1', 55435);
sleep(5);
$client2 = clone $client1;

print_r($client1);
echo '<br/>';
print_r($client2);
