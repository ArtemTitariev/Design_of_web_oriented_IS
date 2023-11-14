<?php

require_once './Client.php';
require_once './ICustomerStore.php';
require_once './CustomerStoreAdapter.php';

$client1 = new Client('Name1', 'Some address1');

$customerProfile = new CustomerProfile(1);
$customerProfile->addPurchase("Product A", 2);
$customerProfile->addPurchase("Product B", 1);

// create adapter

// save customer data
