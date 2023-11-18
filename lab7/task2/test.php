<?php

require_once './UserAccount.php';
require_once './Payment.php';

function tryToPay(IPaymentHandler $handler, float $amount)
{
	echo "Purchase for {$amount} currency units<br/>";
	$handler->handlePayment($amount);
	echo '<br/>';
}

// 300 currency units on the main account and 1000 units on the credit card
$userAccount = new UserAccount(300, 1000);

$accountHandler = new AccountBalanceHandler($userAccount);
$creditCardHandler = new CreditCardHandler($userAccount);

// creating a chain
$accountHandler->setSuccessor($creditCardHandler);

tryToPay($accountHandler, 200); // payment from the main account
tryToPay($accountHandler, 500); // payment by credit card

tryToPay($accountHandler, 4000); // insufficient funds
