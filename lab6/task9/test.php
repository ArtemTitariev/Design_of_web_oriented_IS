<?php

require_once './Client.php';
require_once './ICustomerStore.php';
require_once './CustomerStoreAdapter.php';
require_once './CustomerProfile.php';

$client = new Client('Client1', 'Some address1');

$customerProfile = new CustomerProfile(1);
$customerProfile->addPurchase("Product A", 2);
$customerProfile->addPurchase("Product B", 1);

// create adapter
$storeAdapter = new CustomerStoreAdapter($client, $customerProfile);

// save customer data
$storeAdapter->saveCustomerData();
